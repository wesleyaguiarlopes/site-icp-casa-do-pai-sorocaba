/* mobile navigation menu - open and close mobile menu*/

$(document).ready(function() {
    $('.mobile-menu').on('click', function() {
        $('.mobile-nav-bar').toggleClass('active')
        $('.mobile-menu').find('i').toggleClass('fa-xmark')
    });
});