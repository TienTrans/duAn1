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
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["editProduct_submit"])) {
                    // Lấy dữ liệu từ biểu mẫu
                    $productName = $_POST["productName"];
                    $productQuantity = $_POST["productQuantity"];
                    $status = $_POST["status"];
                    $categoryId = $_POST["categoryId"];
                    $productPrice = $_POST["productPrice"];
                    $discount = $_POST["discount"];
                    $material = $_POST["material"];
                    $trademark = $_POST["trademark"];
                    $desc = $_POST["desc"];

                    // Thực hiện thêm sản phẩm vào cơ sở dữ liệu
                    $id_new = sp_add($categoryId, $productName, $productPrice, $productQuantity, $status, $discount, $material, $trademark, $desc);
                    if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
                        // Đường dẫn thư mục lưu trữ ảnh
                        $uploadDir = '../content/hinh/';

                        // Duyệt qua từng tệp tin được tải lên
                        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                            $fileName = $_FILES['images']['name'][$key];
                            $filePath = $uploadDir . $fileName;

                            move_uploaded_file($tmp_name, $filePath);
                            img_add($id_new, $fileName);
                            // Lưu đường dẫn của tệp tin vào cơ sở dữ liệu hoặc thực hiện các thao tác khác
                            // Ví dụ: $filePath có thể được lưu vào cơ sở dữ liệu để sử dụng sau này
                        }
                    }

                    // Redirect hoặc hiển thị thông báo thành công
                    header("location:?mod=product&act=list");
                    exit();
                }
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
            case 'update':
                include "view/header.php";
                include "view/product/page_product_update.php";
                include "view/product/footer_product.php";
                break;
            case "show":
                echo "show";
                break;
        }
    }
?>