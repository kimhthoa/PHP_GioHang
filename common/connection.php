<?php
    $conn = new mysqli("localhost", "root", "", "shopping_cart");
    $conn->set_charset("utf8");
    if($conn->connect_error) {
        die( "Connect Failed");
        
    }
    else {
        //echo "Connect success";
    }
?>