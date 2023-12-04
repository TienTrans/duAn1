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
<<<<<<< HEAD

    function dm_main_select_all(){
        $sql = "SELECT * FROM danhmuc WHERE parent_id=0";
        return pdo_query($sql);
    }

    function th_select_all(){
        $sql = "SELECT * FROM thuonghieu";
        return pdo_query($sql);
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
=======
>>>>>>> c313248 (tien-code-admin-2)
    
?>