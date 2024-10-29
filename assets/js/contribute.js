function copy() {
    var pixkey = document.getElementById("key-pix-email");
    pixkey.select();
    document.execCommand("copy");
    alert("Chave Pix copiada!");
}