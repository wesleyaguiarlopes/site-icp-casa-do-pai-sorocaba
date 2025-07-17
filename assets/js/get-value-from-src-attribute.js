function linkInserted() {
    // verifica se o <textarea id="new-url"> é diferente de vazio"
    if (document.getElementById('new-url').value !== '') {
        // armazena o valor do <textarea id="new-url"> na variável embedUrl
        const embedUrl = document.getElementById('new-url').value;
        // verifica se contém http na url de incorpração
        if(embedUrl.includes('http')){
            // retorna o indice de onde inicia o http na url de incorporação
            let startOfHttp = embedUrl.indexOf('http');
            // inicia a variável que vai receber o novo link
            let newUrl = '';
            // verifica se o comprimento do
            for (let contador = startOfHttp; contador < embedUrl.length; contador++) {
                // verifica se o caractere do indice é "
                if (embedUrl[contador] === '"') {
                    // ao encontrar o ", após o http encerra a repetição
                    break
                } else {
                    // a partir do h de http, acrescenta letra a letra ao novo link
                    newUrl += embedUrl[contador];
                }
            }

            // <textarea id="new-url">, recebe o novo link
            document.getElementById('new-url').value = newUrl;
            // o iframe, recebe o link para exibir o vídeo
            document.querySelector('iframe').src = newUrl;
        }
    } else {
        // se o <textarea id="new-url"> é vazio, limpa a exibição do iframe
        document.querySelector('iframe').src = '';
    }
}