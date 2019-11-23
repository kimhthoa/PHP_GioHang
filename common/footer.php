<footer class="dark">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-3">
                    <a href=""><img src="images/ft-img.png" alt=""></a>
                    <p></p>
                    <p>Nhà phân phối chính thức các sản phẩm chính hãng của tập đoàn Kangaroo</p>
                    <a href=""><img src="images/ft-img-2.png" alt=""></a>
                </div>
                <div class="col-lg-3">
                    <div class="list-ft">
                        <h4>Giới thiệu</h4>
                        <ul>
                            <li><a href="">Về chúng tôi</a></li>
                            <li><a href="">Hình thức mua hàng</a></li>
                            <li><a href="">Hình thức thanh toán</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Tư vấn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="list-ft">
                        <h4>Thông tin trợ giúp</h4>
                        <ul>
                            <li><a href="">Hướng dẫn mua hàng</a></li>
                            <li><a href="">Vận chuyển và giao hàng</a></li>
                            <li><a href="">Đổi và trả hàng</a></li>
                            <li><a href="">Chính sách bảo hành</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="list-ft">
                        <h4>Thông tin trợ giúp</h4>
                        <p></p>
                        <i class="fas fa-map-marker-alt"></i>&ensp;&nbsp;<span>Số 1 Nguyễn Xiển, Thanh Xuân, Hà Nội</span>
                        <br>
                        <i class="fas fa-phone-alt"></i>&ensp;&nbsp;<span>CSKH: 0981.926.011 - 0914.666.512</span>
                        <br>
                        <i class="fas fa-envelope"></i>&ensp;&nbsp;<span>lienhe@kangaroohanoi.vn</span>
                        <br>
                        <span>Giấy chứng nhận đăng ký doanh nghiệp số 010 6411 810 do Sở kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày 06/01/2014</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-mid text-center">
            <h4>Hình thức thanh toán</h4>
            <img src="images/ft-img-3.png" alt="">
        </div>

    </div>
    <div class="footer-bot">
        <div class="container">
            <a href="/">Trang chủ</a>
            /<a href="/gioi-thieu-1">Giới thiệu</a>
            /<a href="/collections/all">Sản phẩm</a>
            /<a href="/tin-khuyen-mai-kangaroo">Khuyến mãi &amp; Sự kiện</a>
            /<a href="/tin-thoi-su-kangaroo">Tin tức</a>
        </div>
        <div class="col-half text-center">www.KangarooHanoi.vn</div>
    </div>
</footer>
<!-- End of footer !-->


<!-- Modal -->
<!-- <div class="modal fade" id="productModal" tabindex="-1" role="dialog" style="overflow-y: hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button style="outline: 0" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <?php
            if (isset($_GET['details'])) {
                $id = $_GET['id'];
                $stmt = $conn->prepare("SELECT * FROM product WHERE id=?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();

                $image = $row['product_image'];
                $name = $row['product_name'];
            }
            ?>
            <div class="modal-body">
                <div class="modal-product clearfix">
                    <div class="product-images">
                        <div class="main-image shadow">
                            <img src="" alt="" id="zoom_03">
                        </div>
                        <div class="thumnail pt-4">
                            <div class="thumnail-item owl-carousel" id="gallery_01">
                                <a href="#" data-image="images/product-1.jpg" data-zoom-image="images/product-1.jpg"><img class="zoom_03" src="images/product-1.jpg" alt=""></a>
                                <a href="#" data-image="img/1.jpg" data-zoom-image="img/1.jpg"><img class="zoom_03" src="img/1.jpg" alt=""></a>
                                <a href="#" data-image="img/2.jpg" data-zoom-image="img/2.jpg"><img class="zoom_03" src="img/2.jpg" alt=""></a>
                                <a href="#" data-image="img/3.jpg" data-zoom-image="img/3.jpg"><img class="zoom_03" src="img/3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="product-info">
                        <h1 id="name-product"></h1>
                        <div class="price-box-3">
                            <div class="s-price-box">
                                <span class="new-price"> 8.290.000₫ </span>
                                <span class="old-price">11.500.000₫</span>
                            </div>
                        </div>
                        <a href="#" class="see-all">Xem tất cả tính năng</a>
                        <div class="quick-add-to-cart">
                            <form method="post" class="cart">
                                <div class="numbers-row">
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" min="1" name="sl" max="1000" step="1" value="1">
                                    </div>
                                </div>
                                <button class="single_add_to_cart_button ml-5" type="submit">Thêm vào giỏ</button>
                            </form>
                        </div>
                        <div class="quick-desc">
                            Máy lọc nước Kangaroo Hydrogen KG100HC 10 lõi vỏ tủ VTU trụ tròn đen Sự kết hợp hoàn hảo giữa phong cách thiết kế Châu Âu với quan niệm phong thủy Á Đông tạo nên một kiệt tác về thiết kế, một nét chấm phá đặc sắc trong không gian thiết ...
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- END Modal -->
<a href="" id="scrollUp"></a>

<!-- myScroll  -->
<div class="scroll-menu d-none d-lg-block" id="myScroll">
    <ul class="nav nav-pills nav-stacked">
        <li>
            <a href="#product-1">
                <img src="images/scroll-1.png" alt="">
            </a>
            <span class="tooltip-menu">Máy lọc nước Hydrogen</span>
        </li>
        <li>
            <a href="#product-2">
                <img src="images/scroll-2.png" alt="">
            </a>
            <span class="tooltip-menu">Máy lọc nước Kangaroo</span>
        </li>
        <li>
            <a href="#product-3">
                <img src="images/scroll-3.png" alt="">
            </a>
            <span class="tooltip-menu">Cây nước Hàn Quốc</span>
        </li>
        <li>
            <a href="#product-4">
                <img src="images/scroll-4.png" alt="">
            </a>
            <span class="tooltip-menu">Cây nước liên doanh</span>
        </li>
        <li>
            <a href="#product-5">
                <img src="images/scroll-5.png" alt="">
            </a>
            <span class="tooltip-menu tooltip-yellow">Máy làm mát không khí</span>
        </li>
        <li>
            <a href="#product-6">
                <img src="images/scroll-6.png" alt="">
            </a>
            <span class="tooltip-menu tooltip-purple">Tủ đông - tủ mát Kangaroo</span>
        </li>
        <li>
            <a href="#product-7">
                <img src="images/scroll-7.png" alt="">
            </a>
            <span class="tooltip-menu tooltip-blue">Thiết bị mùa đông Kangaroo</span>
        </li>
        <li>
            <a href="#product-8">
                <img src="images/scroll-8.png" alt="">
            </a>
            <span class="tooltip-menu tooltip-orange">Thiết bị nhà bếp</span>
        </li>
    </ul>
</div>
<!-- End of myScrolspy -->

<!-- Scroll-qc -->
<div class="scroll-qc d-none d-lg-block visible" id="myScrollspy">
    <div class="icon">
        <a href="">Giá<br>tốt nhất</a>
    </div>
    <div class="icon icon-2">
        <a href="">Giao hàng<br>tận nơi </a>
    </div>
    <div class="icon icon-3">
        <a href="">Thay <br>lõi lọc <br>tại nhà</a>
    </div>
    <div class="icon icon-4">
        <a href="">Đổi trả<br> dễ dàng</a>
    </div>
    <div class="icon icon-5">
        <a href="">Bảo hành <br>Chính hãng</a>
    </div>
</div>
<!-- End Scroll-qc -->


<!--  -->

<!--  -->

<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>