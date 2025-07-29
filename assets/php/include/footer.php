<section class="content">
    <p>Copyright © <span id="current-year"></span> <span id="church-name">ICP Casa do Pai</span> Sorocaba.</p>
    <p>Todos os direitos reservados.</p>
    <button id="btn_admin-access" title="Acesso ao gerenciamento do site">
        <i class="fa-solid fa-user-tie"></i> Acesso Admin
    </button>
</section>
<script>
    document.getElementById("current-year").innerText = new Date().getFullYear();

    document.getElementById("btn_admin-access").addEventListener("click", function() {
        location.href="admin";
    });
</script>