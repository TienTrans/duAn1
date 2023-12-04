<?php
session_start();
function sp_select_all(){
    $sql = "SELECT * FROM sanpham"; 
    return pdo_query($sql);
}

function sp_select_by_id($id){
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);

}

//thêm sp vào giỏ hàng
// if(isset($_POST["id"])){
//     $id = $_POST["id"];
//     $Ten = $_POST["Ten"];
//     $image = $_POST["hinh"];
//     $don_gia = $_POST["don_gia"];
//     $san_pham = [
//         "id" =>  $id,
//         "Ten" => $Ten,
//         "hinh" => $image,
//         "don_gia" => $don_gia
//     ];
    
// }

//     if(isset($_SESSION["shopping_cart"])){
//         $key = -1;
//         foreach ($_SESSION["shopping_cart"] as $index => $item) {
//             if ($item["id"] == $id) {
//                 $key = $index;
//                 break;
//             }
//         }

//         if($key !== -1){
//             $_SESSION['shopping_cart'][$key]['so_luong'] += $so_luong;
//         }else{
//             $_SESSION['shopping_cart'][] = $san_pham;
//         }
//     }else{
//         $_SESSION['shopping_cart'] = array($san_pham);
//     }

//     if(isset($_POST["comback"])){
//         header("Location: ../index.php?thanh_cong=1");
//         exit();
//     }else{
//         header("Location: ../index.php?page=singleproducts&id=$id&thanh_cong=1");
//         exit();
//     };
// }

// Check if the shopping cart array exists in the session
if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = array();
}


function sp_update($productId, $categoryId, $productName, $productPrice, $productQuantity, $status){
        $sql = "UPDATE sanpham SET id_DanhMuc=?, Ten=?, Gia=?, Soluong=?, TrangThai=?  WHERE id=?";
        pdo_execute($sql, $categoryId, $productName, $productPrice,$productQuantity, $status,  $productId);
    }

    function sp_delete($id) {
    $sql = "DELETE FROM sanpham WHERE id=?";
    
    pdo_execute($sql, $id);
}
function spnb_select_all(){
    $sql = "SELECT * FROM sanpham where noibat = 1";
    return pdo_query($sql);
}
// Retrieve product information from the POST data
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $Ten = $_POST["Ten"];
    $sl = $_POST["sl"];
    $image = $_POST["hinh"];
    $Gia = $_POST["Gia"];

    // Create an array with product information
    $san_pham = array(
        "id" => $id,
        "Ten" => $Ten,
        "sl" => $sl,
        "hinh" => $image,
        "Gia" => $Gia
    );

    // Add the product to the shopping cart array
    $_SESSION["giohang"][] = $san_pham;
    
}


// function sp_best_seller(){
//     $sql = "SELECT * FROM sanpham where best_seller = 1";

//     return pdo_query($sql);
// }

// function spnb_select_all(){
//     $sql = "SELECT * FROM sanpham where noibat = 1";
//     return pdo_query($sql);
// }
?>
<!-- sp_update($productId, $categoryId, $productName, $productPrice, $productQuantity, $status); -->