<?php
include_once "./common/header.php";
include_once "./common/connection.php";
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center py-5 text-uppercase title-single-product"> Chi tiết sản phẩm</h4>
            <div class="wrapper text-center">
                <div class="row">
                    <?php
                    $id = $_GET['id'];
                    $stmt = $conn->prepare("SELECT * FROM product WHERE id=?");
                    $stmt->bind_param("s", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) :
                        ?>
                        <div class="col-lg-5">
                            <div class="img_holder shadow pt-3">
                                <img src="<?= $row['product_image'] ?>" alt="img" class=" img-responsive" id="zoom_03">
                                <div class="thumnail-item owl-carousel pt-5" id="gallery_01">
                                    <a href="#" data-image="<?= $row['img_slider'] ?>" data-zoom-image="<?= $row['img_slider'] ?>"><img style="width: 75px; height: 75px; display: inline;" class="zoom_03" src="<?= $row['img_slider'] ?>" alt=""></a>
                                    <a href="#" data-image="<?= $row['img_slider_two'] ?>" data-zoom-image="<?= $row['img_slider_two'] ?>"><img style="width: 75px; height: 75px; display: inline;" class="zoom_03" src="<?= $row['img_slider_two'] ?>" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 ">
                            <div class="item_description text-center shadow">
                                <div class="wifi-animation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="balls">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <h4 class="product-heading"><?= $row['product_name'] ?></h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <span class="item_price mr-5" style="color:#F94F01"><?= number_format($row['product_sale']) . '&nbsp;VNĐ' ?></span>
                                    <del class="item_price"><?= number_format($row['product_cost']) . '&nbsp;VNĐ' ?></del>
                                </div>
                                <p class="item_price_txt my-4"><?= $row['product_des'] ?></p>
                                <form action="" method="POST" class="form-submit">
                                    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                    <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                    <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                    <input type="hidden" class="psale" value="<?= $row['product_sale'] ?>">
                                    <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                    <div class="quantity">
                                        <input type="number" class="itemQty quantity-input" name="soluongsp" max="1000" step="1" value="1">
                                        <div class="quantity-nav">
                                            <div class="quantity-button quantity-up">+</div>
                                            <div class="quantity-button quantity-down">-</div>
                                        </div>
                                    </div>
                                    <button class="text-uppercase addToCart">Thêm Vào giỏ</button>
                                </form>
                            </div>
                        </div>
                </div>
            <?php endwhile; ?>
            <div class="related_product my-5">
                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="product-details.php?msp=7" data-width="100%" data-numposts="5" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=870&amp;height=100&amp;href=http%3A%2F%2Fproduct-details.php%2F%3Fmsp%3D7&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v5.0" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 178px;"><iframe name="f224ccfb70ad718" width="1000px" height="100px" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df27e29aea021f6c%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%253A8081%252Ffcc8be16156a9%26relation%3Dparent.parent&amp;container_width=870&amp;height=100&amp;href=http%3A%2F%2Fproduct-details.php%2F%3Fmsp%3D7&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v5.0" style="border: none; visibility: visible; width: 100%; height: 178px;" class=""></iframe></span></div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "./common/footer.php";
?>