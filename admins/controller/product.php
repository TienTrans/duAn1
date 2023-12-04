<?php
    
    if(isset($act)){
        
        switch($act){
            case "list":
                include "view/header.php";
                 $ds_sp = sp_select_all();
                 $ds_dm_parent = dm_select_all();
                 $ds_dm_chil = dm_select_all(false);
                include "view/product/page_product_list.php";
                
                include "view/product/footer_product.php";
                break;
            case "add":
                include "view/header.php";
                $ds_dm_chil = dm_select_all(false);
                $ds_thuongHieu = trademark_select_all();
                // if(isset($editProduct_submit)){
                //         $trang_thai = false;
                //         $count = count($_FILES['image']['name']);
                //         for ($i = 0; $i < $count; $i++) {
                //             if ($_FILES['image']['error'][$i] == UPLOAD_ERR_OK) {
                //                 $trang_thai = true;
                //                 break;
                //             }
                //         }
                //         if($trang_thai){
                //             $hinh = $_FILES["image"]["name"][0] ?? "";
                //             $hinh1 = $_FILES["image"]["name"][1] ?? "";
                //             $hinh2 = $_FILES["image"]["name"][2] ?? "";
                //             $hinh3 = $_FILES["image"]["name"][3] ?? "";
                //             img_insert($hinh, $hinh1, $hinh2, $hinh3 );
                //             move_uploaded_file($_FILES["image"]["tmp_name"][0],'../content/frontend/img/product/'.$hinh);
                //             move_uploaded_file($_FILES["image"]["tmp_name"][1],'../content/frontend/img/product/'.$hinh1);
                //             move_uploaded_file($_FILES["image"]["tmp_name"][2],'../content/frontend/img/product/'.$hinh2);
                //             move_uploaded_file($_FILES["image"]["tmp_name"][3],'../content/frontend/img/product/'.$hinh3);
                //             $id_image = img_select_by_new();
                //            echo( $id_image["id"]);
                //             sp_update($id, $id_dm, $ten_sp, $don_gia, $giam_gia, $id_image["id"], $mo_ta, $chat_lieu);

                //         }else{
                //             sp_update($id, $id_dm, $ten_sp, $don_gia, $giam_gia, $hinh_cu, $mo_ta, $chat_lieu);
                //         }
                //         header("location:?mod=product&act=list");
                        
                // }
                // $dm = dm_select_all();
                // $sp = sp_select_by_id($id);
                // $cl = cl_select_all();
                
                // echo"<pre>";
                // var_dump($sp);
                include "view/product/page_product_add.php";
                include "view/product/footer_product.php";
                break;
             case "delete":
                    sp_delete($id);
                    img_delete($id);
                     header("location:?mod=product&act=list"); 
                 break;

            case "edit":
                if(isset($editProduct_submit)){
                    sp_update($productId, $categoryId, $productName, $productPrice, $productQuantity, $status);
                }
                header("location:?mod=product&act=list");
                break;
                
                
            case "show":
                echo "show";
                break;
        }
    }
?>