<?php require_once './connect.php'; 

  $id = $_GET["id"];
  $query = "SELECT * FROM sanpham WHERE sanpham.idSanpham = '$id'";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$query)){
      echo 'Errol';
  } else{
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);
  }
?>


<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/chitiet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <div class="container">
       
    <?php require_once './header.php' ?>

    <div class="back-home" style="padding: 20px 0">
        <a href="./index.php" style="color: #ffba00; font-size:25px">
            <i class="fa-solid fa-hand-point-left"></i>
        </a>
    </div>
        <!-- end header -->
    
        <main role="main">
            <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
            <div class="container mt-4">
                <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
    
                <div class="card">
                    <div class="container-fliud">
                        <form method="get" action="xulygiohang.php">
                            <input type="text" name="id" value="<?php echo $row["idSanpham"];?>" style="display: none;"/>
                            <div class="wrapper row">
                                <div class="preview col-md-6">
                                    <?php echo '<img src="./images/'.$row["Hinh"].'" alt="">'; ?>
                                </div>
                                <div class="details col-md-6">
                                  
                                <?php echo '<h3 class="desc-product__title">'.$row["Ten"].'</h3>'; ?>
                                    
                                    <div class="rating">
                                        <div class="stars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <span class="review-no">999 reviews</span>
                                    </div>
                                    <p class="product-description">Màn hình 10.1 inch cảm ứng đa điểm</p>
                                    
                                    <h4 class="price">Giá hiện tại: <span><?php echo number_format($row["Gia"],0, ',', '.'); ?> đ</span></h4>
                                    <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                        <strong>Uy
                                            tín</strong>!</p>   
                                        <span class="color orange not-available" data-toggle="tooltip"
                                            title="Hết hàng"></span>
                                        <span class="color green"></span>
                                        <span class="color blue"></span>
                                    </h5>
                                    <div class="form-group">
                                        <label for="soluong">Số lượng đặt mua:</label>
                                        <input type="number" class="form-control" id="soluong" name="soluong">
                                    </div>
                                    <div class="action">
                                        <input type="submit" name="" class="add-to-cart btn btn-default" id="btnThemVaoGioHang" value="Thêm vào giỏ hàng" />
                                    </div>
                                </div>
    
                            </div>
                        </form>
                    </div>
                </div>
    
                <div class="card card__btm">
                    <div class="container-fluid">
                        <h3>Thông tin chi tiết về Sản phẩm</h3>
                        <div class="row">
                            <div class="col">
                            <?php echo $row["Mota"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End block content -->
        </main>
    
        <?php require_once 'footer.php' ?>
    </div>

</body>

</html>