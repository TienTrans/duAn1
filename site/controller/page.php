<?php
    session_start();
    extract($_REQUEST);
    include "views/header.php";

    if(isset($page)){
        switch($page){
            case 'shop':
                include "views/shop.php";
                break; 
                case 'product':
                    include "views/product.php";
                    break;
                case 'sp':
                    include "views/singleproduct.php";
                    break;    
                case 'login':
                    include "views/login.php";
                    break;
                case 'register':
                    include "views/register.php";
                    break;
                case 'cart':
                    include "views/cart.php";
                    break;
                case 'contact':
                    include "views/contact.php";
                    break;
                case 'checkout':
                    include "views/checkout.php";
                    break;


                    

            
            default:
                include "views/home.php";
                break;

        }}
    ob_end_flush();
    include "views/footer.php";
    
?>