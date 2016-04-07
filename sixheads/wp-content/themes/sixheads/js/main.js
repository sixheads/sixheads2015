(function($) {

    $(document).ready(function() {

        // Toggle Nav
        $('body').addClass('js');
        var $menu = $('#site-navigation'),
            $menutoggle = $('.menu-toggle');

        $menutoggle.click(function() {
            $menutoggle.toggleClass('active');
            $menu.toggleClass('active');
            return false;
        });

        // Smooth scrolling
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });

    });

})(jQuery);