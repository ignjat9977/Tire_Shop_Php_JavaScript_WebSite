<?php 
    header("Content-type: application/json");
    include("assets/models/functions.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        try{

            $limit = $_POST["limit"];

            $prod = selectAllProducts($limit);
            $numProd = numberProd();

            echo json_encode([
                "products"=>$prod,
                "num"=>$numProd
            ]);
            http_response_code(200);
            
        }catch(PDOException $ex)
        {
            http_response_code(500);
        }

    }else{
        http_response_code(404);
    }