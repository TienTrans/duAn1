<!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth Sofa
                                            </h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="../content/frontend/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth & Wood Sofa
                                            </h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="../content/frontend/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth Sofa
                                            </h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="../content/frontend/img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
<!-- feature_part start-->
<section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>DANH MỤC SẢN PHẨM</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">Khám phá ngay <i class="fas fa-play"></i></a>
                        <img src="../content/frontend/img/feature/feature_1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">Khám phá ngay <i class="fas fa-play"></i></a>
                        <img src="../content/frontend/img/feature/feature_2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">Khám phá ngay <i class="fas fa-play"></i></a>
                        <img src="../content/frontend/img/feature/feature_2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">Khám phá ngay <i class="fas fa-play"></i></a>
                        <img src="../content/frontend/img/feature/feature_3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single_feature_post_text">
                        <h3>Latest foam Sofa</h3>
                        <a href="#" class="feature_btn">Khám phá ngay <i class="fas fa-play"></i></a>
                        <img src="../content/frontend/img/feature/feature_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>SẢN PHẨM NỔI BẬT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <?php 
                                //  $spnb=spnb_select_all();
                                 foreach ($spnb as $item){
                                     extract($item);
                                     $gia_tien_format = number_format($Gia, 0, ',', '.');
                                     $main_image=img_select_by_id($id);
                                     echo ' <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                    <from action
                                    <a href="?page=sp&id='.$id.'"><img src="../content/hinh/' . $main_image['image'] . '" alt=""></a>
                                        <div class="single_product_text">
                                            <h4>'.$Ten.'</h4>
                                            <h3>'.$gia_tien_format.' VND</h3>
                                            <a href="#" class="add_cart">Thêm vào giỏ<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>';

                                 }
                                ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="../content/frontend/img/offer_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Tuần lễ vàng giảm giá đến 70%</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="Ngày" class="date"></div>
                                <div id="Giờ" class="date"></div>
                                <div id="Phút" class="date"></div>
                                <div id="Giây" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">Đặt ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>SẢN PHẨM <span>BÁN CHẠY</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                      <?php 
                    //    $dssp=sp_best_seller();
                       foreach ($dssp as $item){
                           extract($item);
                           $gia_tien_format = number_format($Gia, 0, ',', '.');
                           $main_image=img_select_by_id($id); 
                            echo ' <div class="single_product_item">
                            <a href="?page=sp&id='.$id.'"><img src="../content/hinh/' . $main_image['image'] . '" alt=""></a>
                            <div class="single_product_text">
                                <h4>'.$Ten.'</h4>
                                <h3>'.$gia_tien_format.' VND</h3>
                            </div>
                        </div>';
                        }
                      ?>  
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->
