<?php
    session_start();
    extract($_REQUEST);
    include "views/header.php";

    if(isset($page)){
        switch($page){
            case 'shop':
                

                include "views/shop.php";
                break; 
            default:
                include "views/home.php";
                break;
        }}
    ob_end_flush();
    include "views/footer.php";
    
?>