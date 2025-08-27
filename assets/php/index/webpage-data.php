<?php
    $sql = "SELECT * FROM page_settings";
    $result = $con->query($sql);
    $webpage_data = $result->fetch_object();
?>