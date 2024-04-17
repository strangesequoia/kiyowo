<?php
    session_start();

    include 'db.php';

    if(isset($_POST['submit'])){
        if (isset($_POST['email'])){
            $email = $_POST['email'];
            if ($email === ''){
                unset($email);
            }
        }
        if (isset($_POST['password'])){
            $password = $_POST['password'];
            if ($password === ''){
                unset($password);
            }
        }

        if (isset($_POST['g-recaptcha-response'])){
            $recapcha = $_POST['g-recaptcha-response'];

            if(!$recapcha){
                $_SESSION['message'] = 'Пожалуйста, подтвердите, что вы не робот';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else{
                $secretKey = '6LfigywpAAAAAHycZ0c2bPT1J38cd1CkhZK8z6wu';
                $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$recapcha;
				$response = file_get_contents($url);
				$responseKey = json_decode($response, true);

                if($responseKey['success']){

                    $email = $_POST['email'];
                    $password = $_POST['password']; 
                    $password = md5($password);
                
                    $check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `Email`= '$email' AND `Password` = '$password';");
                    $check_role = mysqli_query($conn, "SELECT * FROM `users`WHERE `Email`= '$email' AND `Password` = '$password' AND `Role`= 'admin';");
                    
                    if (mysqli_num_rows($check_user) > 0) {
        
                        if (mysqli_num_rows($check_role) > 0) {
                            $_SESSION['admin'] = true;
                            header( "Location: admin.php");
                         } else {
                            $user = mysqli_fetch_assoc($check_user);
                            $_SESSION['user'] = [
                                "ID_user"=> $user ['ID_user'],
                                "Phone"=> $user ['Phone'],
                                "Email"=> $user ['Email'],
                                "Address"=> $user ['Address'],
                                "Profile_picture"=> $user ['Profile_picture'],
                                "Name"=> $user ['Name'],
                            ];
                            header( "Location: account.php");
                         }
                
                     } else {
                            $_SESSION['message'] ='неверный логин или пароль';
                             header( "Location: login.php");
                             exit();
                     }
                }
            }
        }
    } 

    