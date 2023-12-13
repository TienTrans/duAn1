<!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Product Checkout</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area padding_top">
    <div class="container">
      <div class="returning_customer">
        <div class="check_title">
          <h2>
            Phản hồi của khách hàng
            <a href="#">Nhấn vào đây để đăng nhập</a>
          </h2>
        </div>
        <p>
          
        </p>
        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
          <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="name" name="name" value=" " />
            <span class="placeholder" data-placeholder="Tên đăng nhập hoặc email"></span>
          </div>
          <div class="col-md-6 form-group p_star">
            <input type="password" class="form-control" id="password" name="password" value="" />
            <span class="placeholder" data-placeholder="Mật khẩu"></span>
          </div>
          <div class="col-md-12 form-group">
            <button type="submit" value="submit" class="btn_3">
              Đăng nhập
            </button>
            <div class="creat_account">
              <input type="checkbox" id="f-option" name="selector" />
              <label for="f-option">Nhớ tài khoản</label>
            </div>
            <a class="lost_pass" href="#">Quên mật khẩu ? </a>
          </div>
        </form>
      </div>
      <div class="cupon_area">
        <div class="check_title">
          <h2>
            Bạn có voucher?
            <a href="#">Nhấn vào đây để nhập voucher</a>
          </h2>
        </div>
        <input type="text" placeholder="Nhập voucher" />
        <a class="tp_btn" href="#">Xác nhận</a>
      </div>
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-5">
            <h3>Chi tiết thanh toán</h3>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="name" name="name" placeholder="Họ Và Tên"/>
                
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" placeholder="Số Điện Thoại"/>
                
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="email" placeholder="email"/>
              </div>
              <!-- <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">Country</option>
                  <option value="2">Country</option>
                  <option value="4">Country</option>
                </select>
              </div> -->
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="diachi" placeholder="Địa Chỉ"/>
              </div>
              <div class="col-md-12 form-group">
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="Ghi chú"></textarea>
              </div>
            </form>
          </div>
          <div class="col-lg-7 p-2">
            <div class="order_box" >
              <h2 style="text-align:center;">Hóa đơn</h2>
              <ul class="list">
                <li class="row">
                  <div class="col-md-4">
                  Sản phẩm
                  </div>
                  <div class="col-md-4 text-center">
                  Giá
                  </div>
                  <div class="col-md-2 text-center">
                     Số Lượng
                  </div>
                  <div class="col-md-2">
                      Tổng
                  </div>  
                  <!-- <a href="#">Sản phẩm
                    <span>Tổng</span>
                  </a> -->
                </li>
               <?php
               $tonghd=0; 
               foreach ($_SESSION['giohang'] as $index => $item){
                extract($item);
                $giaChuoi = str_replace('.', '', $Gia);
                $giaSoNguyen = intval($giaChuoi);
                $tt = $giaSoNguyen * intval($sl);
                $tt_format = number_format($tt, 0, ',', '.');
                $tonghd +=$tt;
                $tonghd_format = number_format($tonghd, 0, ',', '.');
                
                echo '
                <li class="row">
                <div class="col-md-4">
                    <a>'.$Ten.'</a>
                </div>
                <div class="col-md-4 text-center">
                    <a>'.$Gia.'</a>
                </div>
                <div class="col-md-2 text-center">
                    <a>'.$sl.'</a>
                </div>
                <div class="col-md-2">
                    <a>'.$tt_format.'</a>
                </div>
            </li>
              
                ';
              }
               ?>
              </ul>
              <br>
              <ul class="list list_2">
                <li>
                  <?php
                  echo'
                  <a>Tổng tiền
                    <span>'.$tonghd_format.'</span>
                  </a>'
                  ?>
                </li>
              </ul>
              <br>
              
            <br>
            <div class="text-right">
            <button class="btn_1 checkout_btn_1"  type="submit" style="background: #f33838a8;width: 176px;height: 43px;">Thanh toán </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

  