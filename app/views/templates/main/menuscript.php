<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    "use strict";
    $(".i-menu").mouseenter(function(e) {
        if ($(window).width() > 943) {
            $('.cont-menu-desk').addClass('mostrame').fadeIn(200);
            e.preventDefault();
        }
    })
    .mouseleave(function(e) {
        $('.cont-menu-desk').fadeOut(150, () => {
           $(this).removeClass('mostrame');
        })
        e.preventDefault();
    });
});
// $(window).resize(function() {
//     $(".drowpdown > ul > li").children("ul").hide();
//     $(".drowpdown > ul").removeClass('show-on-mobile');
// });
</script>