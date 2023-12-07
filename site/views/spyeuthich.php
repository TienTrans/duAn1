 <!---->
 <ol>
       
    </ol>
    <!---->
    <section class="ab-info-main py-5">
        <div class="container py-3">
            <br><br>
            <h3 class="tittle text-center">View Cart</h3>
            <!-- <div class="row contact-main-info mt-5">
                <div class="col-md-6 contact-right-content"> -->
                    <!-- left -->
                    <?php 
                        $spyeuthich = $_SESSION['spyeuthich'] ?? array();
                        if((isset($_SESSION['spyeuthich']))&&(count($_SESSION['spyeuthich'])>0));
                        echo '
                        <section class="cart_area padding_top">
                            <div class="container">
                                <div class="cart_inner">
                                    <div class="table-responsive">
                                    <table class="table">
                                    <thead>
                                    <tr>
                                        
                                        <th scope="col">Tên</th>
                                        <th scope="col">Hình</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">xóa</th>
                                    </tr>
                                    </thead>
                                    ';
                                    if (count($_SESSION['spyeuthich']) > 0) {
                                  foreach ($_SESSION['spyeuthich'] as $index => $item){
                                    extract($item);
                                    echo '<tbody>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                <div class="media-body">
                                                    <p>'.$Ten.'</p>
                                                </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <img src="../content/hinh/'.$hinh.'" style="height: 100px;width:100px;"alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <h5>'.$Gia.'</h5>
                                            </td>
                                            <td>
                                            <h5>
                                            <input class="input-number" type="number" value="'.$sl.'"  name="sl"></h5>
                                            </td>
                                            
                                            <td>
                                            <a href="?page=deletewish&index=' . $index . '">xóa</a>
                                            </td>                               
                                            </td>
                                        </tr>
                                    </tbody>';
                                  }  
                                }
                                    echo'
                                    </table>
                                    
                                </div>
                            </div>
                        </section>
                        ';
                    ?>
                    <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="?page=product">Tiếp tục mua hàng</a>
            
                            
          </div>
                <!-- </div>
                
                <div class="col-md-6 contact-left-content">
                 

                </div>

            </div> -->
        </div>
    </section>