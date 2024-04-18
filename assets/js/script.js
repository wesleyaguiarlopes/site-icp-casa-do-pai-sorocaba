// mobile navigation menu - open and close mobile menu

$(document).ready(function() {
    $('.mobile-menu').on('click', function() {
        $('.mobile-nav-bar').toggleClass('active')
        $('.mobile-menu').find('i').toggleClass('fa-xmark')
    });
});

$(document).ready(function() {
    $('.mobile-nav-items').on('click', function() {
        $('.mobile-nav-bar').removeClass('active')
        $('.fa-bars').removeClass('fa-xmark')
    });
});

// copy the pix key to the clipboard

function copy(){
    var pixkey = document.getElementById("key-pix");
    pixkey.select();
    document.execCommand("copy");
    alert("Chave Pix copiada!");
}

// copy the pix key to the clipboard, in mobile version
function copy_mobile(){
    var pixkeymobile = document.getElementById("key-pix-mobile");
    pixkeymobile.select();
    document.execCommand("copy");
    alert("Chave Pix copiada!");
}