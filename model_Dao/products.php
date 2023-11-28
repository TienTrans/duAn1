<?php
function sp_select_all(){
    $sql = "SELECT * FROM sanpham";
    
    return pdo_query($sql);
}
?>
