<?php require_once './connect.php';?>

<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Giỏ Hàng</title>

<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./css/giohang.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
<?php require_once './header.php';
    if(!isset($_SESSION['username'])){
        echo '<script> window.location="http://localhost/webbanhang/login.php" </script>';
    }
?>

<main role="main">
    <div class="container mt-4">
        <div id="thongbao" class="alert alert-danger d-none face" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <h1 class="text-center">Giỏ hàng</h1>
        <div class="row">
            <div class="col col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>

                    <tbody id="datarow">
                    <?php
                        $sql = "SELECT donhang.idDonhang, donhang.Soluong, sanpham.Ten, sanpham.Gia, sanpham.Hinh, sanpham.idSanpham
                        FROM donhang, sanpham
                        WHERE donhang.Username = '".$_SESSION['email']."'
                        AND sanpham.idSanpham = donhang.idSanpham
                        ";
                        $query = mysqli_query($conn,$sql);
                        $index = 0;
                        while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr class="row-product">
                            <td class="text-right"><?php echo ++$index; ?></td>
                            <td>
                                <?php echo '<img src="./images/'.$row["Hinh"].'" alt="" class="hinhdaidien">'; ?>
                            </td>
                            <td><?php echo $row['Ten']; ?></td>
                            <td class="text-right text-update">
                                <a href="./xulygiohang.php?minus&idDonhang=<?php echo $row['idDonhang']; ?>&soluong=<?php echo $row['Soluong']; ?>">
                                    <i class="fa-solid fa-minus text-update-less"></i>
                                </a> 
                                <span class="text-update-amount"><?php echo $row['Soluong']; ?></span> 
                                <a href="./xulygiohang.php?plus&idDonhang=<?php echo $row['idDonhang']; ?>&soluong=<?php echo $row['Soluong']; ?>">
                                    <i class="fa-solid fa-plus text-update-more"></i>
                                </a>
                            </td>
                            <td class="text-right"><?php echo number_format($row["Gia"],0, ',', '.'); ?> đ</td>
                            <td class="text-right">
                                <span class="pay" data="<?php echo $row["Gia"] * $row['Soluong']; ?>"><?php echo number_format($row["Gia"] * $row['Soluong'],0, ',', '.'); ?></span> đ
                            </td>
                            <td class="text-right">
                                <a href="./xulygiohang.php?delete&idDonhang=<?php echo $row['idDonhang']; ?>" id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="./index.php" class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Quay về trang chủ</a>
                <button class="btn btn-primary btn-md open-modal">
                    <div div class="box">
                        <span class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</main>

<?php require_once 'footer.php' ?>

<!-- Modal -->
<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Thanh Toán</h2>
		<span class="close close-modal">&times;</span>
		<div class="content">
			<div class="sum">
                <span class="sum-text">Tổng tiền: </span>
                <span class="sum-number"> 12.000.000 đ</span>
            </div>

            <p class="choose-pay">Chọn phương thức thanh toán</p>
            <div class="list-methods-payment">
                <span class="cast-method method-payment target">Thanh toán bằng tiền mặt</span>
                <span class="card-method method-payment">Thanh toán bằng thẻ tín dụng</span>
            </div>
		</div>
        <div style="text-align: right; padding-right: 20px">
        <button class="btn-close-modal close-modal">Chọn</button>
        </div>
	</div>
</div>

<script src="./js/giohang.js"></script>

</body>

</html>