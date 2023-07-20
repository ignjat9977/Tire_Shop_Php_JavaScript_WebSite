<?php
    session_start();
    header("Content-type: application/json");
    include("assets/models/functions.php");
    if(isset($_POST["btn"])){

        $error = 0;
        $status = "";
        $response = "";

        $username = $_POST["username"];
        $password = $_POST["password"];

        $userReg = "/^[a-z0-9]{3,15}$/";
        $passReg = "/^[a-zA-Z0-9~!@#$%^&*()_+{}]{8,20}$/";

        if(!preg_match($userReg, $username)){
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

            $user = checkUser($username, $pass);
            $status = 200;
            $response = ["resMessage"=>"You successfully loged in!"];
            if($user){
                $_SESSION["role"] = $user->role_name;
                $_SESSION["user"] = $user;
                $_SESSION["userId"]=$user->user_id;
            }else{
                $response = ["resMessage"=>"Wrong password or username!"];
            }
        }
        echo json_encode($response);
        http_response_code($status);



    }else{header("Location: 404.php");}