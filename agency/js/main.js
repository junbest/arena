(function ($) {
    "use strict";

    $(window).on('load', function(){
        //===== Prealoder
        $("#preloader").delay(400).fadeOut();
    });

    $(document).ready(function () {
        //05. sticky header
        function sticky_header(){
            var wind = $(window);
            var sticky = $('header');
            wind.on('scroll', function () {
                var scroll = wind.scrollTop();
                if (scroll < 100) {
                    sticky.removeClass('sticky');
                } else {
                    sticky.addClass('sticky');
                }
            });
        }
        sticky_header();
        //===== Back to top

        // Show or hide the sticky footer button
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 600) {
                $('.back-to-top').fadeIn(200)
            } else {
                $('.back-to-top').fadeOut(200)
            }
        });

        //Animate the scroll to yop
        $('.back-to-top').on('click', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: 0,
            }, 900);
        });

        // Hamburger-menu
        $('.hamburger-menu, .overlay').on('click', function () {
            $('.hamburger-menu, .coinbuy_left, .overlay, .admin_mb_link').toggleClass('current');
        });



        // password show hide
        $(".toggler").click(function() {
          $(this).toggleClass("active");
          var input = $(this).parent().find('input');
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });

        // nice select
        $('select').niceSelect();

        // nice number
        $('.quantity').niceNumber({
            buttonPosition: 'right'
        });

        // file upload
        $("input[type=file]").change(function (e) {
          $(this).parents(".uploadFile").find(".filename").text(e.target.files[0].name);
        });

        // audio play
        $('.alert_modal_audio').click(function() {
            const audio = new Audio("sound/alert&modal.wav");
            audio.play();
        });

        // audio play
        $('.admin_audio').click(function() {
            const audio = new Audio("sound/admin_new.wav");
            audio.play();
        });

    });

})(jQuery);