<?php
    extract($_REQUEST);    

        $mod = isset($_GET['mod'])? $_GET['mod'] : "default";

        switch($mod){
            case 'category':
                include "controller/category.php";
                break;
            case 'product':
                include "controller/product.php";
                break; 
            case 'statistic':
                include "controller/statistic.php";
                break;
            case 'user':
                include "controller/users.php";
                break;
            default:
                include "controller/home.php";
                break;
        };
    
?>