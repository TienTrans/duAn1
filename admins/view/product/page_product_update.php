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
                <h3 class="tile-title">Cập nhật sản phẩm</h3>
                <div class="tile-body">


                    <form action="?mod=product&act=update" method="post" enctype="multipart/form-data" class="row">

                        <div class="form-group col-md-3">
                            <label class="control-label">Tên sản phẩm</label>
                            <input name="productName" class="form-control" type="text"
                                value="<?php echo isset($sp['Ten']) ? ($sp['Ten']) : ''; ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Số lượng</label>
                            <input name='productQuantity' class="form-control" type="number"
                                value="<?php echo isset($sp['SoLuong']) ? htmlspecialchars($sp['SoLuong']) : ''; ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Tình trạng</label>
                            <select name='status' class="form-control" id="exampleSelect1">
                                <option value='1'
                                    <?php echo (isset($sp['TinhTrang']) && $sp['TinhTrang'] == '1') ? 'selected' : ''; ?>>
                                    Còn hàng</option>
                                <option value='0'
                                    <?php echo (isset($sp['TinhTrang']) && $sp['TinhTrang'] == '0') ? 'selected' : ''; ?>>
                                    Hết hàng</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh mục</label>
                            <select class="form-control" id="exampleSelect1" name='categoryId'>
                                <option>-- Chọn danh mục --</option>
                                <?php 
                                    foreach ($ds_dm_chil as $item) {
                                        extract($item);
                                        echo '<option value="'.$id.'" '.(isset($sp['id_DanhMuc']) && $sp['id_DanhMuc'] == $id ? 'selected' : '').'>' . $Ten_DanhMuc . '</option>';
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Giá bán</label>
                            <input name="productPrice" class="form-control" type="text"
                                value="<?php echo isset($sp['Gia']) ? htmlspecialchars($sp['Gia']) : ''; ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Khuyến Mãi</label>
                            <input name="discount" class="form-control" type="text"
                                value="<?php echo isset($sp['KhuyenMai']) ? htmlspecialchars($sp['KhuyenMai']) : ''; ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Chất Liệu</label>
                            <input name="material" class="form-control" type="text"
                                value="<?php echo isset($sp['ChatLieu']) ? htmlspecialchars($sp['ChatLieu']) : ''; ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Thương Hiệu</label>
                            <select name="trademark" class="form-control" id="exampleSelect1">
                                <option>-- Chọn Thương Hiệu --</option>
                                <?php 
                                    foreach ($ds_thuongHieu as $item) {
                                        extract($item);
                                        echo '<option value="'.$id.'" '.(isset($sp['id_ThuongHieu']) && $sp['id_ThuongHieu'] == $id ? 'selected' : '').'>' . $Ten . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <?php 
                                   foreach ($ds_hinh as $item) {
                                        extract($item);
                                        echo '<img src="../content/hinh/' . $image . '" alt="Product Image" style="max-width: 100px; max-height: 100px;">';
                                    }
                                    

                            ?>
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
                            <textarea class="form-control" name="desc"
                                id="mota"><?php echo isset($sp['ChiTietSanPham']) ? htmlspecialchars($sp['ChiTietSanPham']) : ''; ?></textarea>
                        </div>

                        <!-- Add a hidden input field to store the product ID -->
                        <input type="hidden" name="productId"
                            value="<?php echo isset($sp['id']) ? htmlspecialchars($sp['id']) : ''; ?>">

                        <button class="btn btn-save" type="submit" name="editProduct_submit">Lưu lại</button>
                        <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
                    </form>

                </div>
            </div>
</main>