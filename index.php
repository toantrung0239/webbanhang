<?php require_once './connect.php' ?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang Chủ</title>
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="./images/logo-fuck.jpg" type="image/x-icon" sizes="32*32">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	</head>
  <body>
		<div class="container">
			
		<?php require_once './header.php' ?>

			<div class="content">
			<div class="headline">
				<p class="headline-text">Nhãn Hiệu: </p>
				<select class="headline-list">
					<option value="0">Tất Cả</option>
					<?php
					$query = "SELECT * FROM nhanhang";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$query)){
						echo 'Errol';
					} else{
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);

						while($row = mysqli_fetch_assoc($result)){
							echo '<option value="'.$row["idNhanhang"].'">'.$row["Tennhanhang"].'</option>';
						}
					}
					?>
				</select>
			</div>
			<ul class="products">
			<?php
				$query = "SELECT * FROM sanpham  ORDER BY sanpham.Gia ASC";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$query)){
				echo 'Errol';
				} else{
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);

					while($row = mysqli_fetch_assoc($result)){
						echo '<div class="content-item" data="'.$row["idNhanhang"].'">
									<a href="./chitiet.php?id='.$row["idSanpham"].'">
										<div class="products-item">
											<div class="products-top">
												<img class="image" src="images/'.$row["Hinh"].'" alt="">
											</div>
											<div class="products-info">
												<p class="products-name">'.$row["Ten"].'</p>
												<div class="products-price">'.number_format($row["Gia"],0, ',', '.').' đ </div>
											</div>
										</div>
									</a>
								</div>';
					}
				}
			?>
			</ul>
			</div>



      <?php require_once 'footer.php' ?>
	</div>
	<script src="./js/index.js"></script>
    
  </body>
</html>