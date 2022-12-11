<?php	session_start();  ?>

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
  <title>Document</title>
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
          Đăng Kí <br />
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
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="firstName" required/>
                    <label class="form-label" for="form3Example1">First name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="lastName" required/>
                    <label class="form-label" for="form3Example2">Last name</label>
                  </div>
                </div>
					 <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="address" required/>
                    <label class="form-label" for="form3Example2">Address</label>
                  </div>
                </div>
					 <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="phone" required/>
                    <label class="form-label" for="form3Example2">Phone</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="email" required/>
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" required/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>
              <!-- Submit button -->
              <div class="btn-login-regis">
                <input type="submit" value="Đăng Kí" name="register" class="btn btn-primary btn-block mb-4" style="background-color:rgb(255, 186, 0); border: rgb(255, 186, 0);">
                <button class="btn btn-primary btn-block mb-4" style="background-color:rgb(255, 186, 0); border: rgb(255, 186, 0);"> 
                  <a href="login.php" class="btn-trans">
                    Đăng Nhập             
                  </a>
                </button>
              </div>

              <?php 
                require_once './connect.php';
                if(isset($_POST['register'])){
                  $firstName = $_POST['firstName'];
                  $lastName = $_POST['lastName'];
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $address =  $_POST['address'];
                  $phone =  $_POST['phone'];
                  $name = $firstName.' '.$lastName;

                  $query = "SELECT * FROM khachhang WHERE khachhang.Username = '$email'";

                  $run = $conn->query($query);
                  $count = $run->num_rows;

                  if($count == 1)
                    echo 'Email đã được đăng kí';
                  else{
                    $add = "INSERT INTO khachhang VALUES('$email', '$password', '$address', '$phone','$name')";
                    $conn->query($add);
                    $_SESSION['username'] = $name;
                    $_SESSION['email'] = $email;
                    echo '<script> alert("Đăng kí thành công") </script>';
                    echo '<script> window.location="'.$_SESSION['url'].'" </script>';
                  }
                }
              ?>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'footer.php' ?>
</section>
<!-- Section: Design Block -->
</body>
</html>