<?php
    $current_date = date("Y-m-d");

    $sql = "SELECT text_verse_of_the_day, bible_book, bible_version FROM daily_devotional WHERE todays_date = '$current_date'";
    $result = $con->query($sql);
    $verse_of_the_day_data = $result->fetch_object();

    if($verse_of_the_day_data){
        echo '
            <div class="container">
                <h3 class="title">Versículo do dia</h3>
                <p class="text"><i class="fa-solid fa-quote-left"></i> ' . $verse_of_the_day_data->text_verse_of_the_day . ' <i class="fa-solid fa-quote-right"></i></p>
                <p class="book-chapter-verse">' . $verse_of_the_day_data->bible_book . ' <span class="version">' . $verse_of_the_day_data->bible_version . '</span></p>
                <a class="btn-devotional" href="devocional">ler o devocional<i class="fa-solid fa-arrow-right fa-fade"></i></a>
            </div>
        ';
    } else {
        echo '
            <div class="container no-devotional"></div>
        ';
    }
?>