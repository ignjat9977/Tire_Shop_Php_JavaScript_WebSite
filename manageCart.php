<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["btn"])){

            if(isset($_SESSION["cart"])){
                $myitems = array_column($_SESSION["cart"], "Name");
                if(in_array($_POST["name"], $myitems)){
                    echo "<script>alert('Item alredy added!')
                    window.location.href='shop.php'</script>";
                }
                else{
                    $count = count($_SESSION["cart"]);
                    $_SESSION["cart"][$count] = array("Name"=>$_POST["name"],"Id"=>$_POST["idd"], "Price"=>$_POST["price"], "Img"=>$_POST["img"], "Quantity"=> 1);
                    echo "<script>alert('Item added!')
                        window.location.href='shop.php'</script>";
                }
            
            }else{
                $_SESSION["cart"][0] = array("Name"=>$_POST["name"], "Price"=>$_POST["price"], "Id"=>$_POST["idd"], "Img"=>$_POST["img"], "Quantity"=> 1);
                echo "<script>alert('Item added!')
                    window.location.href='shop.php'</script>";
            }
    }
        


    if(isset($_POST["removeBtnCart"])){
        foreach($_SESSION["cart"] as $key=>$value){
            if($value["Name"] == $_POST["remItem"]){
                unset($_SESSION["cart"][$key]);
                $_SESSION["cart"] = array_values($_SESSION["cart"]);
                
                echo "<script>alert('Item added!')
                window.location.href='cart.php?x=y'</script>";
            }
        }
    }

}else{
    header("Location: 404.php");
}