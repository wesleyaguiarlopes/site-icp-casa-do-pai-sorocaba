<?php
    // As variáveis recebem os valores inseridos nos campos do formulário da página https://www.comunhaoplenasorocaba.com.br/atualizar-devocional
    if(isset($_POST['btn_update-devotional-verse'])) {
        $bibleBook = $_POST['bible-book'];
        $bibleVersion = $_POST['bible-version'];
        $textVerseOfTheDay = $_POST['text-verse-of-the-day'];
        $dailyDevotionalText = $_POST['daily-devotional-text'];
    }

    // os parâmetros para conexão com o banco de dados são informados na variável
    $con = mysqli_connect("localhost", "u267143979_icpsorocaba", "EliasMaluf1402@", "u267143979_db_icpsorocaba");
    
    // query para atualizar os dados da tabela
    $sql = "UPDATE `tb_devotionalverse` SET `id`='1',`bibleBook`='$bibleBook',`bibleVersion`='$bibleVersion',`textVerseOfTheDay`='$textVerseOfTheDay',`dailyDevotionalText`='$dailyDevotionalText' WHERE id = '1'";

    // realiza a conexão, após a query de atualização dos dados
    $rs = mysqli_query($con, $sql);

    // valida o sucesso ou não da operação
    if($rs) {
        // emite um alerta de sucesso e direciona para a página de atualização novamente
        echo "
        <script>
            alert('Versículo do Dia e Devocional Diário atualizados com Sucesso! :D - Vamos para o site principal, OK?');
            location.href='https://www.comunhaoplenasorocaba.com.br';
        </script> ";
    } else {
        // emite um alerta de não sucesso e direciona para a página de atualização novamente
        echo "
        <script>
            alert('Não foi possível atualizar! Envie um print para o administrador!');
            location.href='https://www.comunhaoplenasorocaba.com.br/atualizar-devocional';
        </script> ";
    }

    // fecha a conexão com o banco de dados
    mysqli_close($con);
?>