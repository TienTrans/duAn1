<?php
session_start();

function sp_select_all() {
    $sql = "SELECT * FROM sanpham";
    return pdo_query($sql);
}

function sp_select_by_id($id) {
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}

function sp_best_seller() {
    $sql = "SELECT * FROM sanpham WHERE best_seller = 1";
    return pdo_query($sql);
}

function sp_update($productId, $categoryId, $productName, $productPrice, $productQuantity, $status) {
    $sql = "UPDATE sanpham SET id_DanhMuc=?, Ten=?, Gia=?, Soluong=?, TrangThai=?  WHERE id=?";
    pdo_execute($sql, $categoryId, $productName, $productPrice, $productQuantity, $status, $productId);
}

function sp_delete($id) {
    $sql = "DELETE FROM sanpham WHERE id=?";
    pdo_execute($sql, $id);
}

function spnb_select_all() {
    $sql = "SELECT * FROM sanpham WHERE noibat = 1";
    return pdo_query($sql);
}

function get_product_view() {
    $sql = "SELECT * FROM sanpham WHERE LuotXem > 0 ORDER BY LuotXem DESC";
    return pdo_query($sql);
}

function get_product_hot() {
    $sql = "SELECT * FROM sanpham WHERE SoLuongDaBan > 0 ORDER BY SoLuongDaBan DESC";
    return pdo_query($sql);
}
?>