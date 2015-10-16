/* Theme Name: Worthy - Free Powerful Theme by HtmlCoder
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Version:1.0.0
 * Created:November 2014
 * License: Creative Commons Attribution 3.0 License (https://creativecommons.org/licenses/by/3.0/)
 * File Description: Place here your custom scripts
 */
$(function(){
    $("div.product-chooser").find("div.product-chooser-item").on("click", function() {
        var $this = $(this);
        $this.parent().parent().find('div.product-chooser-item').removeClass('selected');
        $this.addClass('selected');
        var target = $this.attr("data-target");
        $("#download-section > div > div").hide().removeClass("hidden");
        $("#download-section > div > div." + target).show();
    });
    $(".scrollToTop a").on('click', function(e) {
       e.preventDefault();
       $('html, body').animate({scrollTop: 0}, 300);
    });
    var queryParams = location.search.slice(1).split("&");
    var params = {};
    queryParams.forEach(function (value) {
        var parts = value.split("=");
        params[parts[0]] = parts[1];
    });
    if (params.hasOwnProperty("m")) {
        if (params.m == 1) {
            $("#success-alert").removeClass("hidden");
        }
        else if (params.m == 0) {
            $("#error-alert").removeClass("hidden");
        }
    }
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    }); 
});
