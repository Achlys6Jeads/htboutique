<?php
include('essentials.php');

if(isset($_GET['display'])){

    $d = $_GET['display'];

    if($d == "PannierCount"){
      
        $price = 0;
        $count = 0;
        foreach($_SESSION['pannier'] as $key => $value){
            $count = $count + 1*$value['count'];
            $priceHere = $value['price']*$value['count'];
            $price = $price +$priceHere;
        }
        echo $count . ' - ' . $price . '€';
        return;
    }
    if($d == "AddBasket"){
        $productId = $_GET['id'];

        $produit = ProductList()[$productId];

        if(!isset($_SESSION['pannier'][$productId])){
            $_SESSION['pannier'][$productId] = $produit;
        } else {
            $_SESSION['pannier'][$productId]['count'] =  $_SESSION['pannier'][$productId]['count']+1;
        }

        echo 123;

        return;
    }
    if($d == "RemoveBasket"){
        $productId = $_GET['id'];

        $produit = ProductList()[$productId];

        if(isset($_SESSION['pannier'][$productId])){
           unset($_SESSION['pannier'][$productId]);
        }

        echo count($_SESSION['pannier']);
      
        return;
    }

}