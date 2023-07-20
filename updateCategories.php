<?php 
    header("Content-type: application/json");
    include("assets/models/functions.php");

    if(isset($_POST["btn"])){
        $value = $_POST["value"];
        $tableName = $_POST["tableName"];
        $name = $_POST["name"];
        $id = $_POST["id"];
        $i = $_POST["idd"];
        $status="";
        $response = "";

        $updateCat= updateCategory($id ,$value, $tableName, $name, $i);
        if($updateCat){
            $response = ["resMessage"=>"You successffuly update $value to $tableName"];
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