<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="form-add-san-pham.html" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập"
                                onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ file</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file" type="button" title="In"
                                onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button"
                                title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất
                                Excel</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm pdf-file" type="button" title="In"
                                onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                                <th>Danh mục cha</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                    $trang_thai = '';
                                    foreach ($ds_sp as $sp) {
                                         $main_img = img_select_by_id($sp["id"]);
                                        $dm = dm_select_by_id($sp['id_DanhMuc']);
                                        $dm_parent = dm_select_by_id($dm['parent_id']);
                                        if($sp['TrangThai'] === 1) {
                                                $trang_thai = 'Còn Hàng';
                                        }else{
                                            $trang_thai= 'Hết Hàng';
                                        }

                                        if ( isset($main_img['image'])) {
                                            echo '<tr>
                                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                                    <td>' . $sp["id"] . '</td>
                                                    <td>' . $sp["Ten"] . '</td>
                                                    <td><img src="../content/hinh/' . $main_img['image'] . '" alt="" width="100px;"></td>
                                                    <td>' . $sp["SoLuong"] . '</td>
                                                    <td><span class="badge bg-success">'.$trang_thai.'</span></td>
                                                    <td>' . number_format($sp['Gia'], 0, ',', '.') . ' đ</td>
                                                    <td>'.$dm['Ten_DanhMuc'].'</td>
                                                    <td>'.$dm_parent['Ten_DanhMuc'].'</td>
                                                    <td>
                                                        <button class="" id="'.$sp["id"].'" type="button" title="Xóa"   >
                                                            <a href="?mod=product&act=delete&id='.$sp["id"].'">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </button>
                                                        <button
                                                            class="btn btn-primary btn-sm edit"
                                                            type="button"
                                                            title="Sửa"
                                                            data-toggle="modal"
                                                            data-target="#ModalUP"
                                                            data-product-id="'.$sp["id"].'"
                                                            data-product-name="'.$sp["Ten"].'"
                                                            data-product-quantity="'.$sp["SoLuong"].'"
                                                            data-product-price="'.$sp["Gia"].'"
                                                            data-category-id="'.$dm['id'].'"
                                                            data-category-parent="'.$dm_parent['id'].'"
                                                        >
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </tr>';
                                        } else {
                                            echo 'Error fetching main image for product with ID ' . $sp["id"];
                                        }
                                    }
                                    ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <form method="POST" action="?mod=product&act=edit" enctype="multipart/form-data">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Mã sản phẩm
                            </label>
                            <input name="productId" id="productId" class="form-control" type="number" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Tên sản phẩm</label>
                            <input name="productName" id="productName" class="form-control" type="text" required
                                value="" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Số lượng</label>
                            <input name='productQuantity' id="productQuantity" class="form-control" type="number"
                                required value="" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                            <select class="form-control" id="exampleSelect1" name='status'>
                                <option value='0'
                                    <?php if(isset($trang_thai) && $trang_thai === 'Hết hàng') { echo 'selected'; } ?>>
                                    Hết hàng</option>
                                <option value='1'
                                    <?php if(isset($trang_thai) && $trang_thai === 'Còn hàng') { echo 'selected'; } ?>>
                                    Còn hàng</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Giá bán</label>
                            <input name="productPrice" id="productPrice" class="form-control" type="text" value="" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="categoryId" class="control-label">Danh mục </label>
                            <select class="form-control" id="categoryId" name="categoryId">
                                <?php 
                                    foreach ($ds_dm_chil as $item) {
                                        extract($item);
                                        echo '<option value="'.$id.'" >' . $Ten_DanhMuc . '</option>';
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <br />
                    <a href="#" style="
                                float: right;
                                font-weight: 600;
                                color: #ea0000;
                            ">Chỉnh sửa sản phẩm nâng cao</a>
                    <br />
                    <br />
                    <button class="btn btn-save" type="submit" name="editProduct_submit">
                        Lưu lại
                    </button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <br />
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </form>
</div>