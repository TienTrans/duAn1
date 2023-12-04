<?php
    
    function  img_select_all($id){
        $sql = "SELECT * FROM hinhsanpham where product_id=?" ;
        return pdo_query($sql, $id);
    }

    function  img_select_by_id($id){
        $sql = "SELECT * FROM hinhsanpham WHERE product_id=?";
        return pdo_query_one($sql, $id);
    }

    function  img_delete($id){
        $sql = "DELETE  FROM hinhsanpham WHERE product_id=?";
        
            pdo_execute($sql, $id);
        
    }
?>