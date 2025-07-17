<?php
    session_start();

    if(!$_SESSION['username'] == true){
        unset($_SESSION['username']);
        header("Location: ../../login");
    } else {
        if(isset($_POST['btn-update-live-link'])){
            $new_url = $_POST['new-url'];
            $worship_date = $_POST['worship-date'];
            $id_of_the_week = $_POST['day-of-the-week'];

            $sql = "UPDATE weekly_live_urls SET live_video_url = '$new_url', last_update = '$worship_date' where id = '$id_of_the_week'";
            
            switch($id_of_the_week){
                case 1:
                    $week = "Culto de Domingo";
                    break;
                case 2:
                    $week = "Culto de Quarta-Feira";
                    break;
                case 3:
                    $week = "Culto de Sexta-Feira";
                    break;
            }
        }
    
        include_once('database-connection.php');
    
        $result = $con->query($sql);
    
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

                    body {
                        height: 100vh;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-image: linear-gradient(to top, #254e70 0%, #5E88BA 100%);
                    }
    
                    #modal-success {
                        border: none;
                        border-radius: 10px;
                        width: 100%;
                        max-width: 500px;
                        height: 200px;
                        margin: auto;
                        
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
                        location.href='../../atualizar-live-semanais';
                    }
    
                </script>;";
        } else {
            echo "
                <script>
                    location.href='../../atualizar-live-semanais';
                    alert('Falha para atualizar a URL');
                </script>;";
        }
    }
?>