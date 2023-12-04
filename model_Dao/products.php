<?php
function sp_select_all(){
    $sql = "SELECT * FROM sanpham"; 
    return pdo_query($sql);
}

function sp_best_seller(){
    $sql = "SELECT * FROM sanpham where best_seller = 1";

    return pdo_query($sql);
}


function sp_update($productId, $categoryId, $productName, $productPrice, $productQuantity, $status){
        $sql = "UPDATE sanpham SET id_DanhMuc=?, Ten=?, Gia=?, Soluong=?, TrangThai=?  WHERE id=?";
        pdo_execute($sql, $categoryId, $productName, $productPrice,$productQuantity, $status,  $productId);
    }

    function sp_delete($id) {
    $sql = "DELETE FROM sanpham WHERE id=?";
    
    pdo_execute($sql, $id);
}
?>
<!-- sp_update($productId, $categoryId, $productName, $productPrice, $productQuantity, $status); -->