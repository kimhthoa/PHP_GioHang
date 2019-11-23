<?php   
    include_once "./common/connection.php";

      // Thêm giỏ hàng
    if(isset($_POST['pid'])) {
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $pimage = $_POST['pimage'];
        $psale = $_POST['psale'];
        $pcode= $_POST['pcode'];
        $pqty = 1;

        $stmt = $conn->prepare("SELECT product_code  FROM cart WHERE product_code=? ");
        $stmt->bind_param("s",$pcode);
        $stmt->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = $r['product_code'];

        if(!$code) {
            $query = $conn->prepare("INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code)
            VALUE(?,?,?,?,?,?)");
            $query->bind_param("sssiss",$pname,$psale,$pimage,$pqty,$psale,$pcode);
            $query->execute();
            echo '<div class="alert alert-success">
            <strong>Success!</strong> Thêm vào giỏ hàng thành công.
          </div>';
        }
        else {
            echo '<div class="alert alert-danger">
            <strong>Danger!</strong> Sản phẩm này đã có trong giỏ hàng.
          </div>';
        }
    }

      
    if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
      $stmt = $conn->prepare("SELECT * FROM cart");
      $stmt->execute();
      $stmt->store_result();
      $rows = $stmt->num_rows;
      echo $rows;
    }

    // xóa giỏ hàng
    if(isset($_GET['remove'])) {
      $id  = $_GET['remove'];
      $stmt = $conn->prepare("DELETE FROM cart WHERE id=?");
      $stmt->bind_param("i",$id);
      $stmt->execute();
      header("location:cart.php");
    }

      // xóa tất cả giỏ hàng
    if(isset($_GET['clear'])) {
      $stmt = $conn->prepare("DELETE FROM cart");
      $stmt->execute();
      header("location:cart.php");
    }

    // tăng số lượng + update thành tiền
    if(isset($_POST['qty'])) {
      $qty  = $_POST['qty'];
      $pid  = $_POST['pid'];
      $pprice  = $_POST['pprice'];
      
      $tprice = $qty*$pprice;
      $stmt = $conn->prepare("UPDATE cart SET qty=?,total_price=? WHERE id=?");
      $stmt->bind_param("isi",$qty,$tprice,$pid);
      $stmt->execute(); 
    }
?>
