<?php
    $sql = 'SELECT day_of_the_week, live_video_url, last_update FROM weekly_live_urls order by last_update desc';
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $video_of_the_day_of_the_week[] = $row['day_of_the_week'];
            $url_of_videos_of_the_week[] = $row["live_video_url"];
            $video_url_of_this_week_update_date[] = $row["last_update"] ? date('d/m', strtotime($row["last_update"])) : '';
        }
    }
?>