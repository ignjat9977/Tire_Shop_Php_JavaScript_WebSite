
<?php
header("Content-type: application/json");
include("assets/models/functions.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["buyBtnCart"])){
            $userId = $_SESSION["userId"];
            $prodIds = [];
            $prodQu = [];
            foreach($_SESSION["cart"] as $key=>$value){
                array_push($prodIds, $value["Id"]);
                array_push($prodQu, $value["Quantity"]);

            }
            $count = count($_SESSION["cart"]);

            for($i=0; $i<$count;$i++){
                global $conn;
                $sql = "INSERT INTO ik_cart (user_id, prod_id, quantity)
                VALUES(:u,:p,:q)";
                $insert = $conn->prepare($sql);
                $insert->bindParam(":u", $userId);
                $insert->bindParam(":p", $prodIds[$i]);
                $insert->bindParam(":q", $prodQu[$i]);

                $x = $insert->execute();
                $y = $i+1;
                
            }
                echo "You successfully add $count. items";

    }else{header("Location: 404.php");}
}
?>