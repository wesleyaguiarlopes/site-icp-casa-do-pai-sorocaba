<?php
    if(isset($_POST['btn-update-devotional-verse'])) {

        include_once('database-connection.php');
        include_once('include/protect-from-injection.php');

        $bibleBook = protectFromInjection($_POST['bible-book']);
        $bibleVersion = protectFromInjection($_POST['bible-version']);
        $textVerseOfTheDay = protectFromInjection($_POST['text-verse-of-the-day']);
        $dailyDevotionalText = protectFromInjection($_POST['daily-devotional-text']);
        $authorName = protectFromInjection($_POST['author-name']);

        $sql = "UPDATE tb_devotionalverse SET bibleBook = '$bibleBook', bibleVersion = '$bibleVersion', textVerseOfTheDay = '$textVerseOfTheDay', dailyDevotionalText = '$dailyDevotionalText', authorName = '$authorName' WHERE id = 1";
    
        $result = mysqli_query($con, $sql);

        if($result) {
            echo "
                <script>
                    alert('Versículo do Dia e Devocional Diário atualizados com Sucesso! :D! Vamos para a Página Incial, OK?');
                    location.href='/';
                </script> ";
        } else {
            echo "
                <script>
                    alert('Não foi possível atualizar! Atualize novamente');
                    location.href='../../atualizar-devocional';
                </script> ";
        }

        mysqli_close($con);
    } else {
        echo "
            <script>
                alert('Não foi possível atualizar! Atualize novamente');
                location.href='../../atualizar-devocional.php';
            </script> ";
    }
?>