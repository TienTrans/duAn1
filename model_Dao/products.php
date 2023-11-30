<?php
function sp_select_all(){
    $sql = "SELECT * FROM sanpham";
    
    return pdo_query($sql);
}

function sp_best_seller(){
    $sql = "SELECT * FROM sanpham where best_seller = 1";

    return pdo_query($sql);
}


?>
