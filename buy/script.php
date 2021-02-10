<?php

if(!isset($_GET['product'])){
    header('Location: ../index.html');
    exit();
}

$product = $_GET['product'];
if($product != '1' || $product || '2' || $product || '3'){
    header('Location: ../index.html');
    exit();
}



function card($product){
    require_once('../connect/connect.php');
    $connect = new mysqli($host, $user, $password, $name);

    if (!$connect) {
        die ("Połączenie nie powiodło się.");
    }

    $result = $connect->query("SELECT * FROM oferts WHERE id='$id'");
    $row = $result->fetch_assoc();

    $name = $row['name'];
    $old_price = $row['old_price'];
    $new_price = $row['new_price'];

    $product_info = array("name"=>$name, "old_price"=>$old_price, "new_price"=>$new_price);
    return $product_info;
}