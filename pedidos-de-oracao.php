<?php
    session_start();

    if(!$_SESSION['username'] == true){
        unset($_SESSION['username']);
        header("Location: login");
    }

    include_once('assets/php/database-connection.php');

    $sql = "SELECT * FROM tb_prayerrequest ORDER BY id DESC;";
    $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/prayer-requests.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=005">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Pedidos de Oração | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Nossos intercessores estarão orando por você">

        <!-- browser background settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- search engines - SEO -->
        <meta name="robots" content="no-index, no-follow">
        <meta name="keywords" content="ICP, Igreja Comunhão Plena, ICP Casa do Pai, Vida Plena, ICP Sorocaba">
        <meta name="rating" content="general">

        <!-- additional information -->
        <meta name="copyright" content="© 2024 ICP Casa do Pai Sorocaba">
        <meta name="author" content="Evandro Lopes">
        <meta name="author" content="Wesley Lopes">

        <!-- import CDN icons -->
        <script src="https://kit.fontawesome.com/d5ee391d5f.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/0176f204cb.js" crossorigin="anonymous"></script>

        <!-- import CDN jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <header id="navigation-menu">
            <!-- Includes the header -->
             <?php
                include 'assets/php/include/header.php';
            ?>
        </header>
        <section id="prayer-requests">
            <div class="content">
                <h2 class="title">Pedidos de</h2>
                <h3 class="subtitle">Oração</h3>

                <table class="table-contents">
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . strftime("%m/%y", strtotime($row['registered'])) . "</td>";
                                    echo "<td>" .
                                            "<span class='name'>
                                                <i class='fa-solid fa-person-praying'></i>" . $row['name'] .
                                            "</span>" .
                                            "<a class='email' href='mailto:" . $row['email'] . "'>"
                                                . "<i class='fa-solid fa-envelope'></i>" . $row['email'] . "<br>" .
                                            "</a>" .
                                            "<i class='fa-solid fa-location-dot'></i>"
                                                . $row['neighborhood'] . " ● " . $row['city']
                                       . "</td>";
                                    echo "<td>" . $row['requestPrayer'] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <footer>
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="/assets/js/script.js?v=005"></script>
    </body>
</html>