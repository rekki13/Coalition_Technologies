jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.menu.main ul').toggleClass('active');

        e.preventDefault();
    });

});