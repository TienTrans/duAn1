<?php
    
    if(isset($act)){
        include "view/header.php";
        switch($act){
            case "list":
                
                include "view/product/page_product_list.php";
                
                break;
            case "add":
                echo  "add";
                break;
             case "delete":
                     echo "delete product";
                 break;

            case "edit":
                echo "edit product";
                break;
            case "show":
                echo "show";
                break;
        }
        include "view/product/footer_product.php";
    }
?>