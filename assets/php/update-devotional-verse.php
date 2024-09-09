<?php
    // As variáveis recebem os valores inseridos nos campos do formulário da página https://www.comunhaoplenasorocaba.com.br/atualizar-devocional
    if(isset($_POST['btn-update-devotional-verse'])) {
        $bibleBook = $_POST['bible-book'];
        $bibleVersion = $_POST['bible-version'];
        $textVerseOfTheDay = $_POST['text-verse-of-the-day'];
        $dailyDevotionalText = $_POST['daily-devotional-text'];
        $authorName = $_POST['author-name'];
    }

    // inclui a conexão com o banco de dados
    include_once 'database-connection.php';
    
    // query para atualizar os dados da tabela
    $sql = "UPDATE `tb_devotionalverse` SET `id`='1',`bibleBook`='$bibleBook',`bibleVersion`='$bibleVersion',`textVerseOfTheDay`='$textVerseOfTheDay',`dailyDevotionalText`='$dailyDevotionalText',`authorName`='$authorName' WHERE id = '1'";

    // realiza a conexão, após a query de atualização dos dados
    $rs = mysqli_query($con, $sql);

    // valida o sucesso ou não da operação
    if($rs) {
        // emite um alerta de sucesso e direciona para a página de atualização novamente
        echo "
        <script>
            alert('Versículo do Dia e Devocional Diário atualizados com Sucesso! :D! Vamos para a Página Incial, OK?');
            location.href='/';
        </script> ";
    } else {
        // emite um alerta de não sucesso e retorna para a página de atualização novamente
        echo "
        <script>
            alert('Não foi possível atualizar! Atualize novamente');
            // location.href='../../atualizar-devocional';
        </script> ";
    }

    // fecha a conexão com o banco de dados
    mysqli_close($con);
?>