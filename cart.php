<?php
include_once "./common/header.php";
include_once "./common/connection.php";
?>
<div class="container">
    <table class="table table-hover table-bordered shadow mt-4">
        <thead class="" style="background: #339933; color:#fff">
            <tr>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">
                    <a href="action.php?clear=all" class="badge badge-pill badge-danger" onclick="return confirm('Bạn muốn xóa tất cả giỏ hàng ư?');"><i class="fas fa-trash-alt"></i> Xóa tất cả</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $conn->prepare("SELECT * FROM cart");
            $stmt->execute();
            $result = $stmt->get_result();
            $grand_total = 0;
            while ($row = $result->fetch_assoc()) :
                ?>
                <tr>
                    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                    <td>
                        <img class="img-product" src="<?= $row['product_image'] ?>">
                    </td>
                    <td><?= $row['product_name'] ?></td>
                    <td><?= number_format($row['product_price']); ?> VNĐ</td>
                    <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                    <td>
                        <form action="#" method="post">
                            <div class="quantity quantity-item">
                                <input type="number" class="itemQty" name="sl" max="1000" step="1" value="<?= $row['qty'] ?>">
                            </div>
                        </form>
                    </td>
                    <td><?= number_format($row['total_price']); ?> VNĐ</td>
                    <td>
                        <a href="action.php?remove=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có thực sự muốn xóa nó?');">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php $grand_total += $row['total_price']; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
    <h4 class="text-right my-4 total">Tổng tiền :
        <span class="price-total"><?= number_format($grand_total); ?> VNĐ</span>
    </h4>
    <div class="d-flex justify-content-end align-items-center">
        <a href="product.php" class="btn btn-success text-uppercase">Tiếp tục mua hàng</a>
        <button class="btn btn-success ml-3 text-uppercase" onclick="return location.reload();">Cập nhật</button>
        <a href="#" class="btn btn-success ml-3 text-uppercase pay-price">Thanh toán</a>
    </div>
</div>



<?php
include_once "./common/footer.php";
?>