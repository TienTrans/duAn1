<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">


                    <form action="upload.php" method="post" enctype="multipart/form-data" class="row">

                        <div class="form-group col-md-3">
                            <label class="control-label">Tên sản phẩm</label>
                            <input name="productName" class="form-control" type="text">
                        </div>


                        <div class="form-group  col-md-3">
                            <label class="control-label">Số lượng</label>
                            <input name='productQuantity' class="form-control" type="number">
                        </div>
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Tình trạng</label>
                            <select name='status' class="form-control" id="exampleSelect1">
                                <option>-- Chọn tình trạng --</option>
                                <option value='1'>Còn hàng</option>
                                <option value='0'>Hết hàng</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh mục</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn danh mục --</option>
                                <?php 
                                    foreach ($ds_dm_chil as $item) {
                                        extract($item);
                                        echo '<option value="'.$id.'" >' . $Ten_DanhMuc . '</option>';
                                    }
                                    ?>

                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Giá bán</label>
                            <input name="productPrice" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Khuyến Mãi</label>
                            <input name="discount" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Nổi Bật</label>
                            <select class="form-control" id="exampleSelect1">
                                <option value='0'>Không</option>
                                <option value="1">Có</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Chất Liệu</label>
                            <input name="material" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Thương Hiệu</label>
                            <select name="trademark" class="form-control" id="exampleSelect1">
                                <option>-- Chọn Thương Hiệu --</option>
                                <?php 
                                foreach ($ds_thuongHieu as $item) {
                                extract($item);
                                echo '<option value="'.$id.'">' . $Ten . '</option>';
                                }
                                ?>
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <div id="myfileupload">
                                <input enctype="multipart/form-data" type="file" id="uploadfile" name="images[]"
                                    multiple />
                            </div>
                            <div id="thumbbox">
                                <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                                <a class="removeimg" href="javascript:"></a>
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn
                                    ảnh</a>
                                <p style="clear:both"></p>
                            </div>

                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="desc" id="mota"></textarea>

                        </div>
                    </form>

                </div>
                <button class="btn btn-save" type="button">Lưu lại</button>
                <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
            </div>
</main>