<?php 
    header("Content-type: application/json");
    include("assets/models/functions.php");
    if(isset($_POST["btn"])){
        $name = $_POST["tbProdName"];
        $alt = $_POST["tbImgAlt"];
        $des = $_POST["prodDes"];
        $pn = $_POST["prodPN"];
        $po = $_POST["prodPO"];
        $status="";
        $response = "";

        global $conn;
        $sql="INSERT INTO products(prod_name, prod_description, prod_price_new, prod_price_old,prod_img_alt)
        VALUES(:n,:d,:w,:o,:a)";

        $insert = $conn->prepare($sql);
        $insert->bindParam(":n", $name);
        $insert->bindParam(":d", $des);
        $insert->bindParam(":w", $pn);
        $insert->bindParam(":o", $po);
        $insert->bindParam(":a", $alt);

        $result = $insert->execute();

        if($result){
            $response = ["resMessage"=>"You successffuly added new product"];
            $status = 200;
        }else{
            $response = ["resMessage"=>"An error occurred while entering data into the database."];
            $status = 500;
        }
        echo json_encode($response);
        http_response_code($status);



    }else{header("Location: 404.php");}