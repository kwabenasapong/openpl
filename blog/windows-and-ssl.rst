.. title: Windows and SSL
.. slug: 2017/02/20/windows-and-ssl
.. date: 2017-02-20 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/windows-and-ssl.jpg

Recently we've had a lot of posts on the forums, messages on our `Facebook page`_ and e-mails in our support system
from users with the same problem: they are on Windows and they can't complete the First Time Wizard. A few folks have
also mentioned being unable to log into the CCLI SongSelect importer. The error message usually looks something like
this::

  Traceback (most recent call last):
    File "urllib\request.py", line 1183, in do_open
    File "http\client.py", line 1137, in request
    File "http\client.py", line 1182, in _send_request
    File "http\client.py", line 1133, in endheaders
    File "http\client.py", line 963, in _send_output
    File "http\client.py", line 898, in send
    File "http\client.py", line 1287, in connect
    File "ssl.py", line 362, in wrap_socket
    File "ssl.py", line 580, in __init__
    File "ssl.py", line 807, in do_handshake
  ssl.SSLError: [SSL: CERTIFICATE_VERIFY_FAILED] certificate verify failed (_ssl.c:600)

  During handling of the above exception, another exception occurred:

  Traceback (most recent call last):
    File "openlp\plugins\songs\lib\songselect.py", line 87, in login
    File "urllib\request.py", line 464, in open
    File "urllib\request.py", line 482, in _open
    File "urllib\request.py", line 442, in _call_chain
    File "urllib\request.py", line 1226, in https_open
    File "urllib\request.py", line 1185, in do_open
  urllib.error.URLError: <urlopen error [SSL: CERTIFICATE_VERIFY_FAILED] certificate verify failed (_ssl.c:600)>

Thanks to help from `some folks on the forums`_, we've been able to narrow down exactly what the problem is, and
unfortunately it is something that we don't have control over. Having said that, there is a way you can get around it.

.. raw:: html

  <p style="background-color: #eee; border: 1px solid #ccc; border-radius: 3px; padding: 3px 10px; text-align: center;">
    <strong>Make sure you are running the latest version of OpenLP.</strong><br>
    At the time of writing this is <a href="/#downloads">version 2.4.5</a>. If you ask for help and you're not running
    the latest version, we'll tell you to upgrade before helping you.
  </p>

If you're running into this problem while running the First Time Wizard, you need to open up Internet Explorer and
visit `https://get.openlp.org/ <https://get.openlp.org/>`_. This forces Windows to download a file that OpenLP needs.
Once you've opened up the web page, you can close it and go back to OpenLP and retry the First Time Wizard. 

If you're running into the problem where you can't seem to log in to the SongSelect importer, you need to open up
Internet Explorer and visit `SongSelect`_. Again, this forces Windows to download a file that OpenLP needs, and you
can go back to the SongSelect importer.

The OpenLP team is currently discussing what we can do about this situation. It's clearly not our fault, but we will
have to figure out a way to fix it anyway because most people will not be aware of this and think that OpenLP is
broken.

If you're not interested in an explanation of the root cause of the problem, you can stop reading now and follow
the instructions above. If you're interested in all the gory technical details, continue reading...

Technical Explanation
---------------------

OpenLP, like  many other websites, uses a technology called SSL to make sure all communications between your browser
and the website you're visiting is secure and can't be spyed on. This is really useful for things like login screens
where you need to type in your password. These days more and more websites are using SSL for everything, not just
logging in, because they care about your privacy. OpenLP itself uses SSL for connecting to our download servers and
to CCLI's SongSelect service.

In order to use SSL, all computers have a set of "master" or "root" certificates, which helps your computer to verify
that the websites you are visiting are actually secure and who they say they are. Since Windows Vista, however,
Microsoft has not shipped all the root certificates with Windows. Windows only includes Microsoft's certificates, and
Windows has to call the Microsoft servers to download the root certificates it needs.

OpenLP is written in Python, and the methods used in Python on Windows currently don't hook into Windows' certificate
download system. This means that whenever OpenLP tries to contact a website that Windows has never contacted before,
OpenLP and Python are unable to verify the websites OpenLP is trying to contact. By using Internet Explorer to visit
these websites, you force Windows to download the root certificates.

You might be wondering why you have to use Internet Explorer, and why you can't use another browser like Chrome or
Firefox. Both Chrome and Firefox actually come with their own full bundles of root certificates, and so they ignore
Windows completely. Because they ignore Windows, they never trigger the download process and OpenLP can't verify the
websites you've already visited in those browsers.

For more information, take a look at the `bug report in Python's bug tracker`_.

[ Image Credit: `Plios windows 09 by Michael Clarke`_ ]

.. _Facebook page: htps://www.facebook.com/openlp/
.. _some folks on the forums: https://forums.openlp.org/discussion/comment/9885/#Comment_9885
.. _SongSelect: https://songselect.ccli.com/
.. _bug report in Python's bug tracker: http://bugs.python.org/issue20916
.. _Plios windows 09 by Michael Clarke: https://www.flickr.com/photos/michaelclarke/4127641881/
