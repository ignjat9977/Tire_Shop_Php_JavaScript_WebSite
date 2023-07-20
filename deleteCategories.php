<?php 
    header("Content-type: application/json");
    include("assets/models/functions.php");

    if(isset($_POST["btn"])){
        $id = $_POST["id"];
        $tableName = $_POST["nameId"];
        $key = $_POST["key"];
        $status="";
        $response = "";

        $x = deleteBCS($id, $tableName, $key);
        
        if(!$x){
            $response = ["resMessage"=>"You deleted one of $tableName successfully"];
            $status = 200;
        }else{
            $status = 500;
            $response = ["resMessage"=>"An error occurred while deleting data from the database."];
        }
        echo json_encode($response);
        http_response_code($status);

    }else{
        header("Location: 404.php");
    }
