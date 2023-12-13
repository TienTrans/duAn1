<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách Danh Mục</li>
            <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới Danh Muc</h3>
                <div class="tile-body">


                    <form action="?mod=category&act=add" method="post" enctype="multipart/form-data" class="row">

                        <div class="form-group col-md-6">
                            <label class="control-label">Tên Danh Muc</label>
                            <input name="categoryName" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-3
                        ">
                            <label class="control-label">Hình ảnh</label>
                            <div id="myfileupload">
                                <input enctype="multipart/form-data" type="file" id="uploadfile" name="images" />
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Danh Mục Cha </label>
                            <select name="categoryParent" class="form-control" id="exampleSelect1">
                                <option value="0">-- Đây là danh mục cha --</option>
                                <?php 
                                echo var_dump($ds_dm);
                                foreach ($ds_dm as $item) {
                                extract($item);
                                echo '<option value="'.$id.'">' . $Ten_DanhMuc . '</option>';
                                }
                                ?>
                                ?>
                            </select>
                        </div>






                        <button class="btn btn-save" type="submit" name="editCategory_submit">Lưu lại</button>
                        <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
                    </form>

                </div>
            </div>
</main>