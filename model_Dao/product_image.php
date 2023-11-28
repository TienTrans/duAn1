<?php
    
    function  img_select_all(){
        $sql = "SELECT * FROM anh_san_pham ";
        return pdo_query($sql);
    }

    function  img_select_by_id($id){
        $sql = "SELECT * FROM hinhsanpham WHERE product_id=?";
        return pdo_query_one($sql, $id);
    }
?>