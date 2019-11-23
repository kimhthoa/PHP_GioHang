<?php
include_once "./common/header.php";
include_once "./common/connection.php";
?>
    <section class="product" id="product-1">
        <div class="container">
            <div id="message"></div>
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block pr-0">
                    <div class="d-flex">
                        <div class="col-title">
                            <h3>
                                <a href="">Máy lọc nước Hydrogen</a>
                            </h3>
                            <div class="col-title-slider">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/title-slider-1.jpg" class=" w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/title-slider-2.jpg" class=" w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="arrow-prev"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="arrow-next"><i class="fas fa-chevron-right"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-list">
                                <ul>
                                    <a href="" class="more">Xem tất cả</a>
                                </ul>

                            </div>
                        </div> <!-- End of col-title !-->
                        <div class="col-banner">
                            <a href="">
                                <img src="images/banner-img-1.jpg" alt="">
                            </a>
                        </div> <!-- End of col-banner !-->
                    </div>
                </div>
                <div class="col-lg-7 pl-0">
                    <h4 class="title-inner d-lg-none">Máy lọc nước Hydrogen</h4>
                    <div class="product-list">
                        <?php

                        $stmt = $conn->prepare("SELECT * FROM product LIMIT 0,6 ");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) :
                            ?>
                            <div class="product-single text-center">
                                <div class="product-desc">
                                    <div class="product-title">
                                        <a href="product-details.php?id=<?= $row['id'] ?>"><h4><?= $row['product_name'] ?></h4></a>
                                    </div>
                                </div>
                                <div class="product-img">
                                    <a href="#"><img src="<?= $row['product_image'] ?>" alt=""></a>
                                    <a href="#"><img src="<?= $row['img-thumail'] ?>" alt="" class="img-thumb"></a>
                                    <div class="sale">-28%</div>
                                    <div class="product-overlay d-flex justify-content-center">
                                        <form action="" method="POST" class="form-submit">
                                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                            <input type="hidden" class="psale" value="<?= $row['product_sale'] ?>">
                                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                            <button class="btn-buy addItemBtn" data-hieuung="tooltip" data-placement="top" title="Thêm vào giỏ"><i class="fas fa-cart-plus"></i></button>
                                        </form>
                                        <a href="product-details.php?id=<?= $row['id'] ?>" name="details" class="btn-details" data-hieuung="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                                <a href="#" id="btn-add" class="d-lg-none btn-buy"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</a>
                                <div class="product-desc ">
                                    <div class="product-price">
                                        <ins><?= number_format($row['product_sale']) .'&nbsp;VNĐ' ?> </ins>
                                        <del><?= number_format($row['product_cost']) .'&nbsp;VNĐ' ?></del>
                                    </div>
                                </div>
                            </div> <!-- End of single-product  -->
                        <?php
                        endwhile;
                        ?>
                    </div> <!-- End of col-lg-4 -->
                </div> <!-- End of product-list -->
            </div> <!-- End of col-lg-7 -->
        </div>
    </section>
    <!-- End of product -->

    <section class="product" id="product-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block pr-0">
                    <div class="d-flex">
                        <div class="col-title">
                            <h3>
                                <a href="">Máy lọc nước Kangaroo</a>
                            </h3>
                            <div class="col-title-slider">
                                <div id="images" class="carousel slide" data-ride="carousel">
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/title-slider-1.jpg" alt="Los Angeles">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/title-slider-2.jpg" alt="Chicago">
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#images" data-slide="prev">
                                        <span class="arrow-prev"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                    <a class="carousel-control-next" href="#images" data-slide="next">
                                        <span class="arrow-next"><i class="fas fa-chevron-right"></i></span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-list">
                                <ul>
                                    <li><a href="">Lõi lọc nước Kangaroo</a></li>
                                    <li><a href="">Linh kiện máy lọc nước Kangaroo</a></li>
                                    <li><a href="">Máy lọc nước Kangaroo Vỏ tủ VTU</a></li>
                                    <li><a href="">Máy lọc nước Kangaroo Vỏ tủ inox</a></li>
                                    <li><a href="">Máy lọc nước Kangaroo Không vỏ tủ</a></li>
                                    <a href="" class="more">Xem tất cả</a>
                                </ul>

                            </div>
                        </div> <!-- End of col-title !-->
                        <div class="col-banner">
                            <a href="#">
                                <img src="images/banner-img-2.jpg" alt="">
                            </a>
                        </div> <!-- End of col-banner !-->
                    </div>
                </div>
                <div class="col-lg-7 pl-0">
                    <h4 class="title-inner d-lg-none">Máy lọc nước Kangaroo</h4>
                    <div class="product-list">
                        <?php
                        $stmt = $conn->prepare("SELECT * FROM product LIMIT 6,6 ");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) :
                            ?>
                            <div class="product-single text-center">
                                <div class="product-desc">
                                    <div class="product-title">
                                        <a href="product-details.php?id=<?= $row['id'] ?>"><h4><?= $row['product_name'] ?></h4></a>
                                    </div>
                                </div>
                                <div class="product-img">
                                    <a href="#"><img src="<?= $row['product_image'] ?>" alt=""></a>
                                    <a href="#"><img src="<?= $row['img-thumail'] ?>" alt="" class="img-thumb"></a>
                                    <div class="sale">-28%</div>
                                    <div class="product-overlay d-flex justify-content-center">
                                        <form action="" method="POST" class="form-submit">
                                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                            <input type="hidden" class="psale" value="<?= $row['product_sale'] ?>">
                                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                            <button class="btn-buy addItemBtn" data-hieuung="tooltip" data-placement="top" title="Thêm vào giỏ"><i class="fas fa-cart-plus"></i></button>
                                        </form>
                                        <a href="product-details.php?id=<?= $row['id'] ?>" class="btn-details" data-hieuung="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                                <a href="#" id="btn-add" class="d-lg-none btn-buy"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</a>
                                <div class="product-desc ">
                                    <div class="product-price">
                                        <ins><?= number_format($row['product_sale']) .'&nbsp;VNĐ' ?> </ins>
                                        <del><?= number_format($row['product_cost']) .'&nbsp;VNĐ' ?></del>
                                    </div>
                                </div>
                            </div> <!-- End of single-product  -->
                        <?php
                        endwhile;
                        ?>
                    </div> <!-- End of col-lg-4 -->
                </div> <!-- End of col-lg-4 -->
            </div> <!-- End of product-list -->
        </div> <!-- End of col-lg-7 -->
        </div>
        </div>
    </section>
    <!-- End of product -->

    <section class="product" id="product-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block pr-0">
                    <div class="d-flex">
                        <div class="col-title">
                            <h3>
                                <a href="">Máy lọc nước Kangaroo</a>
                            </h3>
                            <div class="col-title-slider">
                                <div id="images" class="carousel slide" data-ride="carousel">
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/title-slider-1.jpg" alt="Los Angeles">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/title-slider-2.jpg" alt="Chicago">
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#images" data-slide="prev">
                                        <span class="arrow-prev"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                    <a class="carousel-control-next" href="#images" data-slide="next">
                                        <span class="arrow-next"><i class="fas fa-chevron-right"></i></span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-list">
                                <ul>
                                    <li><a href="">Lõi lọc nước Kangaroo</a></li>
                                    <li><a href="">Linh kiện máy lọc nước Kangaroo</a></li>
                                    <li><a href="">Máy lọc nước Kangaroo Vỏ tủ VTU</a></li>
                                    <li><a href="">Máy lọc nước Kangaroo Vỏ tủ inox</a></li>
                                    <li><a href="">Máy lọc nước Kangaroo Không vỏ tủ</a></li>
                                    <a href="" class="more">Xem tất cả</a>
                                </ul>

                            </div>
                        </div> <!-- End of col-title !-->
                        <div class="col-banner">
                            <a href="#">
                                <img src="images/banner-img-5.jpg" alt="">
                            </a>
                        </div> <!-- End of col-banner !-->
                    </div>
                </div>
                <div class="col-lg-7 pl-0">
                    <h4 class="title-inner d-lg-none">Máy lọc nước Kangaroo</h4>
                    <div class="product-list">
                        <?php
                        $stmt = $conn->prepare("SELECT * FROM product LIMIT 12,15 ");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) :
                            ?>
                            <div class="product-single text-center">
                                <div class="product-desc">
                                    <div class="product-title">
                                        <a href="product-details.php?id=<?= $row['id'] ?>"><h4><?= $row['product_name'] ?></h4></a>
                                    </div>
                                </div>
                                <div class="product-img">
                                    <a href="#"><img src="<?= $row['product_image'] ?>" alt=""></a>
                                    <a href="#"><img src="<?= $row['img-thumail'] ?>" alt="" class="img-thumb"></a>
                                    <div class="sale">-28%</div>
                                    <div class="product-overlay d-flex justify-content-center">
                                        <form action="" method="POST" class="form-submit">
                                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                            <input type="hidden" class="psale" value="<?= $row['product_sale'] ?>">
                                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                            <button class="btn-buy addItemBtn" data-hieuung="tooltip" data-placement="top" title="Thêm vào giỏ"><i class="fas fa-cart-plus"></i></button>
                                        </form>
                                        <a href="product-details.php?id=<?= $row['id'] ?>" name="details" class="btn-details" data-hieuung="tooltip" data-placement="top" title="Xem chi tiết"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                                <a href="#" id="btn-add" class="d-lg-none btn-buy"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</a>
                                <div class="product-desc ">
                                    <div class="product-price">
                                        <ins><?= number_format($row['product_sale']) .'&nbsp;VNĐ' ?> </ins>
                                        <del><?= number_format($row['product_cost']) .'&nbsp;VNĐ' ?></del>
                                    </div>
                                </div>
                            </div> <!-- End of single-product  -->
                        <?php
                        endwhile;
                        ?>
                    </div> <!-- End of col-lg-4 -->
                </div> <!-- End of col-lg-4 -->
            </div> <!-- End of product-list -->
        </div> <!-- End of col-lg-7 -->
        </div>
        </div>
    </section>

<?php
include_once "./common/footer.php";
?>