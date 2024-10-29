// mobile navigation menu - open and close mobile menu

$(document).ready(function() {
    $('.btn-mobile-menu').on('click', function() {
        $('.mobile-nav-bar').toggleClass('active')
        $('.btn-mobile-menu').find('i').toggleClass('fa-xmark')
    });
});

$(document).ready(function() {
    $('.mobile-nav-items').on('click', function() {
        $('.mobile-nav-bar').removeClass('active')
        $('.fa-bars').removeClass('fa-xmark')
    });
});

// Dialog home

const btnTextApostolicYear = document.querySelector('.btn-text-apostolic-year');
const dgTextApostolicYear = document.querySelector('#dg-text-apostolic-year');
const btnCloseTextApostolicYear = document.querySelector('.btn-closed-text-apostolic-year');

btnTextApostolicYear.onclick = function() {
    dgTextApostolicYear.showModal();
}

btnCloseTextApostolicYear.onclick = function() {
    dgTextApostolicYear.close();
}