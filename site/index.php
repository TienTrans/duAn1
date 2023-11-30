<?php

    extract($_REQUEST);
    include "../model_DAO/products.php";
    include "../model_DAO/pdo.php";
    include "../model_DAO/product_image.php";
    include "../model_DAO/categorys.php";
    if(isset($mod)){
        switch($mod){
            case 'page':
                include_once "controller/page.php";
                break;
        }
    }
    else{
        include_once "controller/page.php";
    }
?>