<?php
    
    function dm_select_all($dm_con= true){
    $sql = "SELECT * FROM danhmuc";
    if($dm_con){

        $sql .= " WHERE parent_id = 0"; // Thêm khoảng trắng ở đây
    }else{
          $sql .= " WHERE parent_id != 0"; // Thêm khoảng trắng ở đây
    }
    return pdo_query($sql);
    }
    
    function dm_select_by_id($id){
        $sql = "SELECT * FROM danhmuc WHERE id=?";
        return pdo_query_one($sql, $id);
    }

    function dm_main_select_all(){
        $sql = "SELECT * FROM danhmuc WHERE parent_id=0";
        return pdo_query($sql);
    }


    function dm_update($categoryName,$status,$categoryId){
        $sql = "UPDATE danhmuc SET  Ten_DanhMuc=?, TrangThai=?  WHERE id=?";
        pdo_execute($sql,$categoryName,$status,$categoryId,);
    }
    function dm_update_img($Image,$categoryId){
        $sql = "UPDATE danhmuc SET  HinhAnh=?  WHERE id=?";
        pdo_execute($sql,$Image,$categoryId);
    }

    function th_select_all(){
        $sql = "SELECT * FROM thuonghieu";
        return pdo_query($sql);
    }

    function createCategory($categoryName, $parent_id) {
    $sql = "INSERT INTO danhmuc (Ten_DanhMuc,  parent_id) VALUES (?, ?)";
    pdo_execute($sql, $categoryName, $parent_id);
}
    function createCategory_image($categoryName, $parent_id , $image) {
    $sql = "INSERT INTO danhmuc (Ten_DanhMuc,  parent_id , HinhAnh) VALUES (?, ?, ?)";
    pdo_execute($sql, $categoryName, $parent_id ,$image);
}
    function dm_delete($id_dm){
        $sql = "DELETE FROM danhmuc WHERE id = ?";
        pdo_execute($sql, $id_dm);
    }
    // function dm_exist($id = null){
    //     if($id !== null){
    //         $sql = "SELECT count(*) FROM danh_muc WHERE id=?";
    //         return pdo_query_value($sql, $id) > 0;
    //     }else{
    //         $sql = "SELECT count(*) FROM danh_muc";
    //         return pdo_query($sql);
    //     }
        
    // }
    
?>