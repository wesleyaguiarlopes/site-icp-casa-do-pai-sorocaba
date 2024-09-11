<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once('database-connection.php');
        $sql = "select username, password from tb_login where username = '$username' and password = '$password'";
        $result = $con->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['username']);
            echo "
                <script>
                    alert('Usuário ou Senha inválidos!');
                    location.href='../../login';
                </script> ";
        }
        else {
            $_SESSION['username'] = $username;
            header("Location: ../../admin");
        }
    }
    else {
        echo "
        <script>
            alert('Usuário ou Senha inválidos!');
            location.href='../../login';
        </script> ";
    }
?>