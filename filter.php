<?php    
    
    header("Content-type: application/json");
    include("assets/models/functions.php");
    if(isset($_POST["btn"])){
        $brand = $_POST["brandId"];
        $sort = $_POST["sortId"];
        $cat = json_decode(stripslashes($_POST['categoryId']));
        $siz = json_decode(stripslashes($_POST['sizeId']));
        $result = filterItems($brand, $sort, $cat, $siz);
        echo json_encode($result);
    }else{
        header("Location: 404.php");
    }