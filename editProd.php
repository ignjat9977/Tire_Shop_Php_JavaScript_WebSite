<?php 
    header("Content-type: application/json");
    include("assets/models/functions.php");
    if(isset($_POST["btn"])){
        $id = $_POST["id"];
        $name = $_POST["tbProdName"];
        $alt = $_POST["tbImgAlt"];
        $des = $_POST["prodDes"];
        $pn = $_POST["prodPN"];
        $po = $_POST["prodPO"];
        $status="";
        $response = "";

        global $conn;
        $sql="UPDATE products 
        SET prod_name=:n, prod_description=:d, prod_price_new = :w,prod_price_old=:o,
        prod_img_alt=:a
        WHERE prod_id = :i";

        $update = $conn->prepare($sql);
        $update->bindParam(":n", $name);
        $update->bindParam(":d", $des);
        $update->bindParam(":w", $pn);
        $update->bindParam(":o", $po);
        $update->bindParam(":a", $alt);
        $update->bindParam(":i",$id);

        $result = $update->execute();

        if($result){
            $response = ["resMessage"=>"You successffuly update product"];
            $status = 200;
        }else{
            $response = ["resMessage"=>"An error occurred while entering data into the database."];
            $status = 500;
        }
        echo json_encode($response);
        http_response_code($status);



    }else{header("Location: 404.php");}