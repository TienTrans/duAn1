<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Shop Single</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              <?php 
              $id_sp = $id;
              $ds_hinh= img_select_all($id_sp);
              foreach ($ds_hinh as $item){
                extract($item);
                echo '<div data-thumb="../content/hinh/'.$image.'">
                <img src="../content/hinh/'.$image.'" alt="">
              </div>
              
              ';
              }
              ?>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <?php
            $main_image=img_select_by_id($id_sp);
            $spct=sp_select_by_id($id_sp);
            extract($spct);
            $gia_tien_format = number_format($Gia, 0, ',', '.');
              echo '
              <form action="?page=addcart" method="post">
              <h3>'.$Ten.'</h3>
            <h2>'.$gia_tien_format.' VND</h2>
            <ul class="list">
              <li>
                <a>Chất liệu   : '.$ChatLieu.'</a>
              </li>
            </ul>
            <p>
              '.$ChiTietSanPham.'
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
           
              <div class="product_count">
                  <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                  <input class="input-number" type="text" value="1" min="0" max="10" name="sl">
                  <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
                <input type="hidden" name="hinh" value="'.$main_image['image'].'">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="Ten" value="'.$Ten.'">
                <input type="hidden" name="Gia" value="'.$gia_tien_format.'">
                <Button type="submit" name="addtocart" style="border: unset; border-radius: 10px; height: 50px; width: 150px; color: white; background-color: #ff3368; font-size: 17px;"> add to cart</Button>
                <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </form>
            </div>
         ';
            
            ?>
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Comments</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="comment_list">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item reply">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-3.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>Post a comment</h4>
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                  novalidate="novalidate">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" id="message" rows="1"
                        placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="btn_3">
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->

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
                       $spbc=get_product_view();
                       foreach ($spbc as $item){
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