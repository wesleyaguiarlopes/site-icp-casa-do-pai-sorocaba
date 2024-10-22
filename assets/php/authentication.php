<?php
    session_start();

    include_once('database-connection.php');

    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $sql = "SELECT username FROM tb_login WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            $sql = "SELECT password FROM tb_login WHERE username = '$username'";
            $result = mysqli_query($con, $sql);
            $result = mysqli_fetch_assoc($result);
            $passwordDataBase = $result['password'];

            if(password_verify($password, $passwordDataBase)){
                $_SESSION['username'] = $username;
                header("Location: ../../admin");
            } else {
                unset($_SESSION['username']);
                echo "
                    <script>
                        alert('Usuário ou Senha inválidos!');
                        location.href='../../login';
                    </script> ";
            }
        } else {
            unset($_SESSION['username']);
            echo "
                <script>
                    alert('Usuário ou Senha inválidos!');
                    location.href='../../login';
                </script> ";
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