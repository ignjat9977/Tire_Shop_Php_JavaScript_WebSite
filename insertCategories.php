<?php 
    header("Content-type: application/json");
    include("assets/models/functions.php");

    if(isset($_POST["btn"])){
        $value = $_POST["value"];
        $tableName = $_POST["tableName"];
        $name = $_POST["name"];
        $status="";
        $response = "";

        $insertCat= insertCategory($value, $tableName, $name);
        if($insertCat){
            $response = ["resMessage"=>"You successffuly add new item to $tableName"];
            $status = 200;
        }
        else{
            $response = ["resMessage"=>"An error occurred while entering data into the database."];
            $status = 500;
        }
        echo json_encode($response);
        http_response_code($status);



    }else{
        header("Location: 404.php");
    }