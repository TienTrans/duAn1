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
?>
