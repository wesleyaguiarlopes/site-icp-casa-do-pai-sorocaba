const prayerRequestSent = document.querySelector('#dg-prayer-request-sent');
const prayerRequestNotSent = document.querySelector('#dg-prayer-request-not-sent');
const btnClosePrayerRequestSent = document.querySelector('#btn-close-prayer-request-sent');
const btnClosePrayerRequestNotSent = document.querySelector('#btn-close-prayer-request-not-sent');
const sectionPedidoDeOracao = document.querySelector('#pedido-de-oracao');

onload = function() {
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('status') && urlParams.get('status') === 'prayerRequestSent') {
        prayerRequestSent.showModal();
        sectionPedidoDeOracao.scrollIntoView();
    }

    if (urlParams.has('status') && urlParams.get('status') === 'prayerRequestNotSent') {
        prayerRequestNotSent.showModal();
        sectionPedidoDeOracao.scrollIntoView();
    }

    const url = window.location.protocol + "//" + window.location.host + window.location.pathname;
    window.history.replaceState({ path: url }, '', url);
};

btnClosePrayerRequestSent.onclick = function() {
    prayerRequestSent.close();
}

btnClosePrayerRequestNotSent.onclick = function() {
    prayerRequestNotSent.close();
}