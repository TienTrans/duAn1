 <!---->
 <?php 
 $total_price = 0;
 ?>
 <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">View cart</li>
    </ol>
    <!---->
    <section class="ab-info-main py-5">
        <div class="container py-3">
            <h3 class="tittle text-center">View Cart</h3>
            <!-- <div class="row contact-main-info mt-5">
                <div class="col-md-6 contact-right-content"> -->
                    <!-- left -->
                    <?php 
                        
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
                                        <th scope="col">Tổng</th>
                                        <th scope="col">xóa</th>
                                    </tr>
                                    </thead>';
                                    
                                    $giohang = $_SESSION['giohang'];
                                    echo count($giohang);
                        
                                  
                    ?>
                <!-- </div>
                
                <div class="col-md-6 contact-left-content">
                 

                </div>

            </div> -->
        </div>
    </section>