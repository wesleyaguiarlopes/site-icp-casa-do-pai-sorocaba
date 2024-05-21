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

// information on the 7 areas of full life

// Espiritual

const btn1 = document.querySelector('#btn1');
const dg1 = document.querySelector('#dg1');
const btnClose1 = document.querySelector('.btnClose1');

btn1.onclick = function() {
    dg1.showModal();
}

btnClose1.onclick = function() {
    dg1.close();
}

// Emocional

const btn2 = document.querySelector('#btn2');
const dg2 = document.querySelector('#dg2');
const btnClose2 = document.querySelector('.btnClose2');

btn2.onclick = function() {
    dg2.showModal();
}

btnClose2.onclick = function() {
    dg2.close();
}

// Fisica
const btn3 = document.querySelector('#btn3');
const dg3 = document.querySelector('#dg3');
const btnClose3 = document.querySelector('.btnClose3');

btn3.onclick = function() {
    dg3.showModal();
}

btnClose3.onclick = function() {
    dg3.close();
}

// Conjugal

const btn4 = document.querySelector('#btn4');
const dg4 = document.querySelector('#dg4');
const btnClose4 = document.querySelector('.btnClose4');

btn4.onclick = function() {
    dg4.showModal();
}

btnClose4.onclick = function() {
    dg4.close();
}

// Familiar

const btn5 = document.querySelector('#btn5');
const dg5 = document.querySelector('#dg5');
const btnClose5 = document.querySelector('.btnClose5');

btn5.onclick = function() {
    dg5.showModal();
}

btnClose5.onclick = function() {
    dg5.close();
}

// Econômica

const btn6 = document.querySelector('#btn6');
const dg6 = document.querySelector('#dg6');
const btnClose6 = document.querySelector('.btnClose6');

btn6.onclick = function() {
    dg6.showModal();
}

btnClose6.onclick = function() {
    dg6.close();
}

// Ministerial

const btn7 = document.querySelector('#btn7');
const dg7 = document.querySelector('#dg7');
const btnClose7 = document.querySelector('.btnClose7');

btn7.onclick = function() {
    dg7.showModal();
}

btnClose7.onclick = function() {
    dg7.close();
}