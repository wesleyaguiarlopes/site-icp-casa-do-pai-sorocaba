<?php
    $sql = "select * from weekly_live_urls order by last_update desc";
    $result = $con->query($sql);
    $counter = 0; // útilizado para verifica se é a segunda vez que passa no laço while

    if($result->num_rows > 0){
        while($live_data = $result->fetch_assoc()){
            $counter++;
            echo '<div class="cults-content">';
            if($counter == 2){
                echo '<h3 class="section-title-our">ÚLTIMAS</h3>
                      <h2 class="section-title-live">LIVE</h2>';
            };
            echo
                    '<div class="live-information">
                        <h2><span class="live"><i class="fa-solid fa-video"></i> live de</span> ' . $live_data['day_of_the_week'] . '<span> ● ' . date('d/m', strtotime($live_data['last_update'])) . ' ● ' . date('H', strtotime($live_data['worship_time'])) . 'h</span></h2>
                        <p class="relation-to-worship"><span>' . $live_data['event_type'] . '</span> ' . $live_data['event_title'] . '</p>
                        <p class="indicate-the-video">Assista ao nosso último vídeo deste dia <i class="fa-solid fa-circle-arrow-right"></i></p>
                    </div>
                    <div class="container-video">
                        <iframe
                            src="' . $live_data['live_video_url'] . '"
                            allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowullscreen>
                        </iframe>
                    </div>
                </div>';
        }
    } else {
        echo '
            <style>
                #cultos { display: none; }
            </style>
        ';
    }
?>