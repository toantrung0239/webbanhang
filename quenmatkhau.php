<?php	session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./style.css">
  <title>Quên Mật Khẩu</title>
</head>
<body>
  <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
  <div class="back-home">
    <a href="./index.php">
      <i class="fa-solid fa-hand-point-left"></i>
    </a>
  </div>
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Đổi Mật Khẩu <br />
          <span style="color: rgb(255, 186, 0)">Chúng tôi rất vui khi phục vụ các bạn</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post" action="">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="username" required/>
                <label class="form-label" for="form3Example3">Email</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" required/>
                <label class="form-label" for="form3Example4">Mật khẩu mới</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4" style="padding: 0;align-items: center; color: #ffba00;">
                <i class="fa-solid fa-arrows-rotate" style="padding-right: 10px; cursor: pointer"></i>
                <a href="login.php" class="form-check-label" for="form2Example33" style="padding-right: 10px; color: #ffba00;">
                  Quay lại đăng nhập
                </a>
              </div>

              <!-- Submit button -->
              <div class="btn-login-regis">
                <input type="submit" value="Đổi mật khẩu" name="renew-pass" class="btn btn-primary btn-block mb-4" style="width: 150px;background-color:rgb(255, 186, 0); border: rgb(255, 186, 0);"/>
                <button class="btn btn-primary btn-block mb-4" style="width: 150px;background-color:rgb(255, 186, 0); border: rgb(255, 186, 0);"> 
                  <a href="login.php" class="btn-trans">
                    Đăng Nhập             
                  </a>
                </button>
              </div>
					<?php
						require_once './connect.php';
						if(isset($_POST['renew-pass'])){
							$username = $_POST["username"];
							$password = $_POST["password"];

							$query = "SELECT * FROM khachhang WHERE khachhang.Username = '$username'";

							$run = $conn->query($query);
							$count = $run->num_rows;
							$query_sql=mysqli_query($conn,$query);
							$row_sql=mysqli_fetch_assoc($query_sql);

							if($count != 1)
								echo 'Email này chưa đăng kí tài khoảng';
							else {
								$update = "UPDATE khachhang SET khachhang.Password = '".$password."' WHERE khachhang.Username = '".$username."'";
                        mysqli_query($conn, $update);
                        echo "Đổi mật khẩu thành công";
							}
						}
					?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once 'footer.php' ?>
<!-- Section: Design Block -->
</body>
</html>