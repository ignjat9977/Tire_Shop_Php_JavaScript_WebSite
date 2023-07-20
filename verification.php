<?php
    header("Content-type: application/json");
    include("assets/models/functions.php");

    if($_GET){
        $f = $_GET["first"];
        $l = $_GET["last"];
        $a = $_GET["adr"];
        $u = $_GET["user"];
        $e = $_GET["email"];
        $p = $_GET["pass"];
        
        $x = insertUser($f,$l,$u,$e,$a,$p);

        if($x){
            echo "You successfully registred!";
        }else{
            echo "Please try to register again!";
        }
    }