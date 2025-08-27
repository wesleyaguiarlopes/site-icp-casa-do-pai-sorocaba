<?php
    $current_date_and_time = strtotime(date("Y-m-d H:i:s"));
    $sql = "(SELECT * FROM worship_calendar WHERE event_datetime < current_date() LIMIT 1) UNION (SELECT * FROM worship_calendar WHERE event_datetime >= current_date() ORDER BY event_datetime LIMIT 4)";
    $result = $con->query($sql);

    while ($event_dates = $result->fetch_assoc()) {
        $event_date = strtotime($event_dates['event_datetime']);
        setlocale(LC_TIME, 'pt_BR.UTF-8');
        
        echo '
            <div class="diary-card">
                <div class="daily">
                    <p class="day-of-week-of-event">' . ucfirst(strftime('%A', $event_date)) . '</p>
                    <p class="event-day">' . strftime('%d', $event_date) . '<span class="event-month">&nbsp' . ucfirst(substr(strftime('%B', $event_date), 0, 3)) . '</span></p>
                    <p class="time"><i class="fa-regular fa-clock"></i> ' . date('H:i', $event_date) . 'h</p>
                </div>
                <div class="event-description">';

        if(strftime('%d', $current_date_and_time) == strftime('%d', $event_date)){
            echo '<p class="label">' . $event_dates['label'] . ' ● <span class="today">é hoje, não perca!</span></p>';
        } else {
            echo '<p class="label">' . $event_dates['label'] . '</p>';
        }

                echo '
                    <p class="description">' . $event_dates['description'] . '</p>
                </div>
            </div>
        ';
    }
?>