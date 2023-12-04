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
          <div class="col-lg-8">
            <h3>Chi tiết thanh toán</h3>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" />
                <span class="placeholder" data-placeholder="Họ"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="name" />
                <span class="placeholder" data-placeholder="Tên"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" />
                <span class="placeholder" data-placeholder="Số điện thoại"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" />
                <span class="placeholder" data-placeholder="Email"></span>
              </div>
              <!-- <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">Country</option>
                  <option value="2">Country</option>
                  <option value="4">Country</option>
                </select>
              </div> -->
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="add1" />
                <span class="placeholder" data-placeholder="Địa chỉ"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="checkbox" id="addressCheckbox" onchange="toggleAddressInput()">
                <label for="f-option2">Địa chỉ khác</label>
                  <div id="addressInput" style="display: none;">
                    <input type="text" class="form-control" id="add2" name="add2" />
                    <br>
                    <span class="placeholder" data-placeholder="Địa chỉ khác"></span>
                  </div>
              </div>
              <div class="col-md-12 form-group">
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="Ghi chú"></textarea>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Hóa đơn</h2>
              <ul class="list">
                <li>
                  <a href="#">Sản phẩm
                    <span>Tổng</span>
                  </a>
                </li>
                <li>
                  <a href="#">Sofa luxury
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">lights luxury
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">chair luxury
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Tạm tính
                    <span>$2160.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Phí giao hàng
                    <span>giao nhanh: $50.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Tổng tiền
                    <span>$2210.00</span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector" />
                  <label for="f-option5">Check payments</label>
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector" />
                  <label for="f-option6">Paypal </label>
                  <img src="img/product/single-product/card.jpg" alt="" />
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>
              <a class="btn_3" href="#">Proceed to Paypal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

  <script>
  function toggleAddressInput() {
    var addressInput = document.getElementById("addressInput");
    var checkbox = document.getElementById("addressCheckbox");

    if (checkbox.checked) {
      addressInput.style.display = "block";
    } else {
      addressInput.style.display = "none";
      document.getElementById("add2").value = "";
    }
  }
</script>