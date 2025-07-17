<?php
    if(isset($_POST['btn-add-verse-and-daily-devotional'])) {
        include_once('database-connection.php');
        $sql = "SELECT todays_date FROM daily_devotional ORDER BY todays_date DESC LIMIT 1;";
        $result = $con->query($sql);
        
        if(!$result->num_rows > 0){
            $next_date = date('Y-m-d');
            echo $next_date;
        } else {
            $last_registered_date = $result->fetch_object();
            $last_registered_date = new DateTime($last_registered_date->todays_date);
            $last_registered_date->modify('+1 day');
            $next_date = $last_registered_date->format('Y-m-d');
            echo $next_date;
        }

        include_once('include/protect-from-injection.php');

        $bible_book = protectFromInjection($_POST['bible-book']);
        $bible_version = protectFromInjection($_POST['bible-version']);
        $text_verse_of_the_day = protectFromInjection($_POST['text-verse-of-the-day']);
        $daily_devotional_text = protectFromInjection($_POST['daily-devotional-text']);

        $sql = "INSERT INTO daily_devotional (todays_date, bible_book, bible_version, text_verse_of_the_day, daily_devotional_text) VALUES ('$next_date', '$bible_book', '$bible_version','$text_verse_of_the_day', '$daily_devotional_text')";
    
        $result = $con->query($sql);

        if($result) {
            echo "
                <script>
                    alert('Versículo e devocional diário adicionado com Sucesso! :D!');
                    location.href='../../adicionar-versiculo-e-devocional-diario';
                </script> ";
        } else {
            echo "
                <script>
                    alert('Não foi possível adicionar, tente novamente!');
                    history.back();
                </script> ";
        }

        $con->close();
    } else {
        echo "
            <script>
                alert('Não foi possível adicionar, tente novamente!');
                history.back();
            </script> ";
    }
?>