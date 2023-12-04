<?php
    // session_start();
    // if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
    extract($_REQUEST);
    

    if(isset($page)){
        switch($page){
            case 'shop':
                include "views/header.php";
                include "views/shop.php";
                include "views/footer.php";
                break; 
                case 'product':
                    include "views/header.php";
                    include "views/product.php";
                    include "views/footer.php";
                    break;
                case 'sp':
                    include "views/header.php";
                    include "views/singleproduct.php";
                    include "views/footer.php";
                    break;
                case 'login':
                    include "views/header.php";
                    include "views/login.php";
                    include "views/footer.php";
                    break;
                case 'addcart':
                    include "views/header.php";
                    if( isset($addtocart)){
                        $hinh = $_POST['hinh'];
                        $id = $_POST['id'];
                        $Ten = $_POST['Ten'];
                        $Gia = $_POST['Gia'];
                        $sl = $_POST['sl'];
                        $item = [
                            "id"    => $id,
                            "hinh"   => $hinh,
                            "Ten"  => $Ten, // Assuming $Ten is the name variable
                            "Gia" => $Gia,
                            "sl"   => $sl
                        ];
                        $_SESSION['giohang'][] = $item;
                        }
                        
                        

                    
                    include "views/viewcart.php";
                    include "views/footer.php";
                    break;
                case 'deletecart':
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    if (isset($_GET['index'])) {
                        $index_to_delete = $_GET['index'];
                        unset($_SESSION['giohang'][$index_to_delete]);
                    }
                    header("location:?page=addcart");
                    exit();
                    break;
                case 'contact':
                    include "views/header.php";
                    include "views/contact.php";
                    include "views/footer.php";
                    break;
                case 'checkout':
                    include "views/header.php";
                    include "views/checkout.php";
                    include "views/footer.php";
                    break;


                    

            
            default:
            include "views/header.php";
                include "views/home.php";
                include "views/footer.php";
                break;

        }}
    
    
?>