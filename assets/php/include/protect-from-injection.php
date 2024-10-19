<?php
    include_once('database-connection.php');

    function protectFromInjection($dataEntry){
        global $con;

        // SQL Injection
        $adjustedDataEntry = mysqli_real_escape_string($con, $dataEntry);
        // XSS Cross Site Scripting -> HTML, CSS
        $adjustedDataEntry = htmlspecialchars($adjustedDataEntry);

        return $adjustedDataEntry;
    }
?>