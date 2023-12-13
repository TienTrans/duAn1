<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách Danh Mục</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="?mod=category&act=add" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới Danh Mục</a>

                        </div>
                        <div class="col-sm-2">

                            <?php 
                                if ($ds_dm[0]['parent_id']) {
                                    echo '<a class="btn btn-add btn-sm" href="?mod=category&act=list&chil=0" title="Thêm">
                                Danh Mục Cha</a>';
                                    
                                }else {
                                    echo '<a class="btn btn-add btn-sm" href="?mod=category&act=list&chil=1" title="Thêm">
                                Danh Mục Con</a>';
                                }
                                ?>

                        </div>


                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã Danh Mục</th>
                                <th>Tên Danh Mục</th>
                                <th>Ảnh</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                    $trang_thai = '';
                                    foreach ($ds_dm as $dm) {
                                         
                                        if($dm['TrangThai'] === 1) {
                                                $trang_thai = 'Đang Hoat Động';
                                        }else{
                                            $trang_thai= 'Tạm Ngưng';
                                        }

                                       
                                            echo '<tr>
                                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                                    <td>' . $dm["id"] . '</td>
                                                    <td>' . $dm["Ten_DanhMuc"] . '</td>
                                                    <td><img src="../content/hinh/' . $dm['HinhAnh'] . '" alt="" width="100px;"></td>
                                                    
                                                    <td><span class="badge bg-success">'.$trang_thai.'</span></td>
                                                   
                                                   
                                                    <td>
                                                        <button class="" id="'.$dm["id"].'" type="button" title="Xóa"   >
                                                            <a href="?mod=category&act=delete&id='.$dm["id"].'">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </button>
                                                        <button
                                                            class="btn btn-primary btn-sm edit"
                                                            type="button"
                                                            title="Sửa"
                                                            data-toggle="modal"
                                                            data-target="#ModalUP"
                                                            data-category-id="'.$dm["id"].'"
                                                            data-category-name="'.$dm["Ten_DanhMuc"].'"
                                                             data-category-image="'.$dm["HinhAnh"].'"
                
                                                        >
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </tr>';
                                        
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

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST" action="?mod=category&act=edit" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Chỉnh sửa thông tin Danh Mục </h5>
                            </span>
                        </div>
                    </div>
                    <div class="row">


                        <input name="categoryId" id="categoryId" class="form-control" type="number" hidden />

                        <div class="form-group col-md-6">
                            <label class="control-label">Tên Danh Mục</label>
                            <input name="categoryName" id="categoryName" class="form-control" type="text" required
                                value="" />
                        </div>


                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                            <select class="form-control" id="exampleSelect1" name='status'>
                                <option value='1'>
                                    Đang Hoạt Động</option>
                                <option value='0'>
                                    Tạm Ngưng</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">


                            <label class="control-label">Hình Danh Mục</label>
                            <div id="myfileupload">
                                <input enctype="multipart/form-data" type="file" id="uploadfile" name="images" />
                            </div>
                        </div>



                    </div>
                    <br />


                    <br />
                    <br />
                    <button class="btn btn-save" type="submit" name="editCategory_submit">
                        Lưu lại
                    </button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <br />
                </div>
            </form>

            <div class="modal-footer"></div>
        </div>
    </div>


</div>