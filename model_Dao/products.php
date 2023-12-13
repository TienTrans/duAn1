<?php
function sp_select_all(){
    $sql = "SELECT * FROM sanpham"; 
    return pdo_query($sql);
}

function sp_select_by_id($id){
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);

}

function sp_best_seller(){
    $sql = "SELECT * FROM sanpham where best_seller = 1";

    return pdo_query($sql);
}

function spnb_select_all(){
    $sql = "SELECT * FROM sanpham where noibat = 1";
    return pdo_query($sql);
}
function sp_update($productId, $categoryId, $productName, $productPrice, $productQuantity, $status){
        $sql = "UPDATE sanpham SET id_DanhMuc=?, Ten=?, Gia=?, Soluong=?, TrangThai=?  WHERE id=?";
        pdo_execute($sql, $categoryId, $productName, $productPrice,$productQuantity, $status,  $productId);
    }
    
function sp_update_advanced($productId, $categoryId, $productName, $productPrice, $productQuantity, $status, $trademark, $discount, $material, $description){
    $sql = "UPDATE sanpham SET id_DanhMuc=?, Ten=?, Gia=?, Soluong=?, TrangThai=?, id_ThuongHieu=?, KhuyenMai=?, ChatLieu=?, ChiTietSanPham=? WHERE id=?";
    pdo_execute($sql, $categoryId, $productName, $productPrice, $productQuantity, $status, $trademark, $discount, $material, $description, $productId);
}


    function sp_delete($id) {
    $sql = "DELETE FROM sanpham WHERE id=?";
    
    pdo_execute($sql, $id);
}

function sp_add($categoryId, $productName, $productPrice, $productQuantity, $status, $discount, $material, $trademark, $desc) {
    // Thực hiện truy vấn SQL để thêm sản phẩm vào cơ sở dữ liệu
    $sql = "INSERT INTO sanpham (id_DanhMuc, Ten, Gia, Soluong, TrangThai, KhuyenMai, ChatLieu, id_ThuongHieu, ChiTietSanPham) VALUES (?,  ?, ?, ?, ?, ?, ?, ?, ?)";
    $id_new = pdo_execute($sql, $categoryId, $productName, $productPrice, $productQuantity, $status, $discount, $material, $trademark, $desc);
    return $id_new;
}