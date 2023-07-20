<?php 
    header("Content-type: application/json");
    include("assets/models/functions.php");

    if(isset($_POST["btn"])){
        $id = $_POST["id"];
        $status="";
        $response = "";

        $x = deleteProd($id);
        
        if(!$x){
            $response = ["resMessage"=>"You deleted product successfully"];
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
