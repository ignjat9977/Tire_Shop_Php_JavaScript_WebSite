<?php
session_start();
include("assets/models/functions.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["pollBtn"])){
        $x = $_POST["3"];
        $y= $_POST["4"];
        $id = $_SESSION["userId"];
        
        global $conn;
        $sql = "INSERT INTO user_poll (choice_id, user_id)
        VALUES(:x,:u)";

        $insert = $conn->prepare($sql);
        $insert->bindParam(":x", $x);
        $insert->bindParam(":u", $id);

        $insert->execute();

        $sql1 = "INSERT INTO user_poll (choice_id, user_id)
        VALUES(:y,:u)";

        $insert1 = $conn->prepare($sql1);
        $insert1->bindParam(":y", $y);
        $insert1->bindParam(":u", $id);

        $insert1->execute();
        echo "<script>
                    window.location.href='shop.php'</script>";

    }else{
        header("Location: 404.php");
    }

}else{header("Location: 404.php");}