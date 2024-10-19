<?php
    include_once('database-connection.php');
    include_once('include/protect-from-injection.php');

    if(isset($_POST['btn-send-prayer-request'])) {
        $name = protectFromInjection($_POST['name']);
        $email = protectFromInjection($_POST['email']);
        $neighborhood = protectFromInjection($_POST['neighborhood']);
        $city = protectFromInjection($_POST['city']);
        $requestPrayer = protectFromInjection($_POST['requestPrayer']);
        $registered = date('Y-m-d H:i:s');

        // The htmlspecialchars() function, which prevents HTML and Java Script injection, ends up increasing the number of characters, thus limiting the amount defined in the database to the first 40 characters.
        $name = substr($name, 0, 100);
        $email = substr($email, 0, 100);
        $neighborhood = substr($neighborhood, 0, 40);
        $city = substr($city, 0, 40);

        $sql = "INSERT INTO tb_prayerrequest (name, email, neighborhood, city, requestPrayer, registered) VALUES ('$name', '$email', '$neighborhood', '$city', '$requestPrayer', '$registered')";
        $result = mysqli_query($con, $sql);

        if($result){
            header("Location: /?status=prayerRequestSent");
        } else {
            header("Location: /?status=prayerRequestNotSent");
        }

        mysqli_close($con);
    } else {
        header("Location: /?status=prayerRequestNotSent");
    }
?>