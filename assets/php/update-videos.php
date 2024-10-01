<?php
    session_start();

    if(!$_SESSION['username'] == true){
        unset($_SESSION['username']);
        header("Location: ../../login");
    } else {
        if(isset($_POST['btnSunday'])){
            $newURL = $_POST['sunday'];
            $sql = "UPDATE tb_url SET urlSunday = '$newURL' where id = 1";
            $week = "Culto de Domingo";
        }
    
        if(isset($_POST['btnWednesday'])){
            $newURL = $_POST['wednesday'];
            $sql = "UPDATE tb_url SET urlWednesday = '$newURL' where id = 1";
            $week = "Culto de Quarta-Feira";
        }
    
        if(isset($_POST['btnFriday'])){
            $newURL = $_POST['friday'];
            $sql = "UPDATE tb_url SET urlFriday = '$newURL' where id = 1";
            $week = "Culto de Sexta-Feira";
        }
    
        include_once('database-connection.php');
    
        $result = mysqli_query($con, $sql);
    
        if($result){
            echo "
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <script src='https://kit.fontawesome.com/d5ee391d5f.js' crossorigin='anonymous'></script>
                <script src='https://kit.fontawesome.com/0176f204cb.js' crossorigin='anonymous'></script>
                
                <dialog id='modal-success'>
                    <i class='fa-regular fa-circle-check fa-fade'></i>
                    <h2>URL Atualizada!</h2>
                    <p>$week</p>
                    <button id='btnClose'>OK</button>
                </dialog>
    
                <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: sans-serif;
                    }
    
                    #modal-success {
                        border: none;
                        border-radius: 10px;
                        width: 100%;
                        max-width: 500px;
                        height: 200px;
                        margin: 0 auto;
                        top: 10vh;
                        
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
    
                        i {
                            color: green;
                            font-size: 55px;
                            margin-bottom: 10px;
                        }
    
                        #btnClose {
                            background-color: #0f60a7;
                            border: none;
                            color: #fff;
                            margin-top: 10px;
                            padding: 15px 40;
                            border-radius: 10px;
                    
                            display: flex;
                            align-items: center;
                            justify-content: space-evenly;
                        }
    
                        #btnClose:hover {
                            background-color: #3171a8;
                        }
                    }
                </style>
    
                <script>
                    const modalSuccess = document.querySelector('#modal-success');
                    const btnClose = document.querySelector('#btnClose');
    
                    modalSuccess.showModal();
    
                    btnClose.onclick = function() {
                        modalSuccess.close();
                        location.href='../../atualizar-videos';
                    }
    
                </script>;";
        } else {
            echo "
                <script>
                    location.href='../../atualizar-videos';
                    alert('Falha para atualizar a URL');
                </script>;";
        }
    }
?>