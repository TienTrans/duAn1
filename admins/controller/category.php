<?php
    
    if(isset($act)){
        
        switch($act){
            case "list":
            include "view/header.php";
            
            if (isset($chil) && $chil) {
                $ds_dm = dm_select_all(false);
            } else {
                $ds_dm = dm_select_all();
            }
            
            
            
            include "view/category/page_category_list.php";
            include "view/category/footer_category.php";
            break;
            case "add":
               include "view/header.php";
               $ds_dm = dm_select_all();
                 if (isset($_FILES['images'])) {
                $file = $_FILES['images'];
                
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $uploadDir = '../content/hinh/'; 
                    $uploadPath = $uploadDir . basename($file['name']);
                    $img = basename($file['name']);
                    move_uploaded_file($file['tmp_name'], $uploadPath);
                    createCategory_image($categoryName,$categoryParent,$img);
                    header("location:?mod=category&act=list");
                } else {
                    // Handle file upload error
                    echo "File upload failed with error code: " . $file['error'];
                }
                }else if (isset($editCategory_submit)) {
                    createCategory($categoryName,$categoryParent);
                    header("location:?mod=category&act=list"); 
                }
                include "view/category/page_category_add.php";
            include "view/category/footer_category.php";
                break;
            

            case "edit":
                if (isset($editCategory_submit)) {
                dm_update($categoryName,$status,$categoryId);
                header("location:?mod=category&act=list"); 
            }
            if (isset($_FILES['images'])) {
                $file = $_FILES['images'];
                
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $uploadDir = '../content/hinh/'; 
                    $uploadPath = $uploadDir . basename($file['name']);
                    $img = basename($file['name']);
                    move_uploaded_file($file['tmp_name'], $uploadPath);
                    dm_update_img($img,$categoryId);
                    // Now you have the file path in $uploadPath, and you can store it in the database or perform other operations
                    // For example, you can save $uploadPath in your database along with other form data
                } else {
                    // Handle file upload error
                    echo "File upload failed with error code: " . $file['error'];
                }
            }
                break;
            case 'delete':
                dm_delete($id);
                header("location:?mod=category&act=list");
                break;
            
        }
    }
?>