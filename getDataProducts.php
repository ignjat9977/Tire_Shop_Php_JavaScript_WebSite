<?php
    header("Content-Type: application/json");
    include("assets/models/functions.php");
    $prod = selectAllProducts1();
    echo json_encode($prod);