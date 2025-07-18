<?php
    $current_date = date('Y-m-d');
    
    $sql = "select text_verse_of_the_day, bible_book, bible_version, daily_devotional_text from daily_devotional where todays_date = '$current_date'";
    $result = $con->query($sql);
    $daily_devotional_data = $result->fetch_object();
?>