    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Danh mục</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <?php 
                                    $dm_main = dm_main_select_all();
                                    // echo var_dump($dm_main);
                                    foreach ($dm_main as $item){
                                        extract($item);
                                        echo '<li>
                                        <a href="#">'.$Ten_DanhMuc.'</a>
                                        
                                    </li>';
                                    }
                                    ?>
                                    
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Thương hiệu</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <?php 
                                    $th = th_select_all();
                                    foreach ($th as $item){
                                        extract($item);
                                        echo '<li>
                                        <a href="#">'.$Ten.'</a>
                                    </li>';
                                    }
                                    ?>
                                    
                            </div>
                        </aside>  
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p><span>10000 </span> Prodict Found</p>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search"
                                            aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner">
                        <?php 
                        $dssp=sp_select_all();
                        foreach ($dssp as $item){
                            extract($item);
                            $gia_tien_format = number_format($Gia, 0, ',', '.');
                            $main_image=img_select_by_id($id);
                            echo '<div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="../content/hinh/' . $main_image['image'] . '" alt="">
                                <div class="single_product_text">
                                    <h4>'.$Ten.'</h4>
                                    <h3>'.$gia_tien_format.' VND</h3>
                                    <a href="?page=sp" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>';
                        }
                            
                        
                        ?>
                        
                        

                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="ti-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="ti-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

    <!-- product_list part start-->
    <section class="product_list best_seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                      <?php 
                       $dssp=sp_best_seller();
                       foreach ($dssp as $item){
                           extract($item);
                           $gia_tien_format = number_format($Gia, 0, ',', '.');
                           $main_image=img_select_by_id($id); 
                            echo ' <div class="single_product_item">
                            <img src="../content/hinh/' . $main_image['image'] . '" alt="">
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