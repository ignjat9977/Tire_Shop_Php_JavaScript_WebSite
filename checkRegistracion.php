<?php
    header("Content-type: application/json");
    include("assets/models/functions.php");
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'C:\composer\vendor\autoload.php';
    if(isset($_POST["btn"])){
        $error = 0;
        $status = "";
        $response = "";

        $first = $_POST["first"];
        $firstReg = "/^[A-Z][a-z]{2,15}(\s[A-Z][a-z]{2,15})?$/";

        $last = $_POST["last"];
        $lastReg = "/^[A-Z][a-z]{2,15}(\s[A-Z][a-z]{2,15})?$/";

        $user = $_POST["user"];
        $userReg = "/^[a-z0-9]{3,15}$/";

        $email = $_POST["email"];
        $emailReg = "/^[a-z][\w\.\-]+\@[a-z0-9]{2,15}(\.[a-z]{2,4}){1,2}$/";

        $adress = $_POST["adress"];
        $adressReg = "/^[A-ZČĆŠĐŽ][a-zčćšđž]{2,15}(\s[A-ZČĆŠĐŽ][a-zčćšđž]{2,15})?\s[1-9]([0-9])?([0-9])?$/";

        $password = $_POST["password"];
        $passReg = "/^[a-zA-Z0-9~!@#$%^&*()_+{}]{8,20}$/";

        if(!preg_match($firstReg, $first)){
            $error++;
        }
        if(!preg_match($lastReg, $last)){
            $error++;
        }
        if(!preg_match($userReg, $user)){
            $error++;
        }
        if(!preg_match($emailReg, $email)){
            $error++;
        }
        if(!preg_match($adressReg, $adress)){
            $error++;
        }
        if(!preg_match($passReg, $password)){
            $error++;
        }

        if($error != 0){
            $status = 422;
            $response = ["resMessage"=>"An error occurred while processing the data."];
        }else{
            $pass = md5($password);
            try{
                $username="ignjat9977@gmail.com";
                $password = "77581071abc";
                $mail = new PHPMailer(true);
                $mail->IsSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPDebug = 2;
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->Username   = $username;  // GMAIL username
                $mail->Password   = $password;
                $mail->setFrom($username, "User Registracion",0);
                $mail->SMTPAuth = true;
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = "Confirm your email";
                $mail->Body = 'Activate your email:<a href="http://localhost/projects/PHP1-sajt/verification.php?first='.$first.'&last='.$last.'&user='.$user.'&email='.$email.'&adr='.$adress.'&pass='.$pass.'">Confirm</a>';
                $mail->send();
                if($mail){
                    $response = ["resMessage"=>"Please activate your email"];
                    $status = 200;
                }
                }catch(Exception $e){
                    $response = ["resMessage"=>"Message could not be sent"];
                    $status = 500;
                }
        }

        echo json_encode($response);
        http_response_code($status);

    }else{header("Location: 404.php");}