<?php
ini_set("include_path", '/home/openlp/php:' . ini_get("include_path") );

require_once('Services/JSON.php');
require_once('Mail.php');

function redirect($url, $status_code = 303)
{
   header('Location: ' . $url, true, $status_code);
   die();
}

// Validate that this isn't spam
$remote_ip = '';
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $remote_ip = end(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}
else {
    $remote_ip = $_SERVER['REMOTE_ADDR'];
}

// Set up parameters
$url = 'https://www.google.com/recaptcha/api/siteverify';
$fields = array(
    'secret' => '6Lc7Hg4TAAAAAP7o80vkVc9rwBXAeo9PlN3Q7khh',
    'response' => $_POST['g-recaptcha-response'],
    'remoteip', $remote_ip
);
$fields_string = http_build_query($fields);

// Open connection
$ch = curl_init();

// Set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute post
$result = curl_exec($ch);

// Close connection
curl_close($ch);

// Parse response
if ($result !== false && $result !== true) {
    $json = new Services_JSON();
    $api_response = $json->decode($result);
    if ($api_response->success !== true) {
        error_log('Error from verification: ' . print_r($api_response, true));
        redirect('https://openlp.org/?m=0#support');
    }
}
else {
    error_log('Got an error code: ' . $response_status);
    redirect('https://openlp.org/?m=0#support');
}

// Get everything together
$headers['From'] = $_POST['name'] . ' <' . $_POST['email'] . '>';
$headers['To'] = 'support@openlp.org';
$headers['Subject'] = '[Contact Form] ' . $_POST['subject'];
$body = $_POST['message'];
$recipients = 'support@openlp.org';
if ($_POST['me-too']) {
    $recipients .= ',' . $_POST['email'];
}

// Create the mail object using the Mail::factory method
$mail_object =& Mail::factory('mail');
$result = $mail_object->send($recipients, $headers, $body);
if ($result !== true) {
    error_log(print_r($result, true));
    redirect('https://openlp.org/?m=0#support');
}

redirect('https://openlp.org/?m=1#support');
