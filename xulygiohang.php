<?php
   session_start();
   // require_once './header.php';
   require_once './connect.php';

   // Thêm sản phảm vào giỏ hàng cẩu người dùng
   if(!isset($_SESSION['username'])){
      echo '<script> window.location="http://localhost/webbanhang/login.php" </script>';
   }
   else{
      if(isset($_GET['soluong']) && isset($_GET['id'])){
         $soluong = $_GET['soluong'];
         $id = $_GET['id'];
         if($soluong < 0){
            echo '<script> alert("Số lượng sản phẩm không hợp lệ") </script>';
            echo '<script> window.location="'.$_SESSION['url'].'" </script>';
         }
         else {
            $product = "SELECT * FROM sanpham WHERE sanpham.idSanpham = $id";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$product)){
               echo 'Errol';
            }  else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $row = mysqli_fetch_assoc($result);
            }
            
            $now = date('Y-m-d\TH:i:s.uP', time());

            // Thêm mới sản phẩm vào giỏ hàng
            $add = "INSERT INTO donhang (Username, idNhanhang, idSanpham, Ngaytaodonhang, Soluong) 
                     VALUES ('".$_SESSION['email']."','".$row['idNhanhang']."', '".$row['idSanpham']."', '".$now."', '".$soluong."')";
            
            // Sửa lại số lượng sản phẩm giỏ hàng khi thêm sản phẩm đã có trong giỏ hàng
            $checkProductExist = "SELECT * FROM donhang WHERE donhang.idSanpham = $id";
            $run = $conn->query($checkProductExist);
            $count = $run->num_rows;
            if($count == 1){
               $resultUpdate = mysqli_query($conn, $checkProductExist);
               $row = mysqli_fetch_assoc($resultUpdate);
               $soluongUpdate = $soluong + $row['Soluong'];
               $update = "UPDATE donhang SET Soluong = '".$soluongUpdate."' WHERE donhang.idSanpham = '".$id."'";
               $conn->query($update);
            }
            else
               $conn->query($add);
               echo '<script> alert("Sản phẩm đã được thêm vào giỏ hàng") </script>';
            echo '<script> window.location="'.$_SESSION['url'].'" </script>';
         }
      }
   }

   // Cập nhập số lượng và giá sản phẩm khi người dùng thay đổi
   if(isset($_GET['idDonhang']) && isset($_GET['soluong'])){
      if(isset($_GET['minus'])){
         if($_GET['soluong'] > 1){
            $idDonhang = $_GET['idDonhang'];
            $soluong = $_GET['soluong'] - 1;
            $update = "UPDATE donhang SET Soluong = '".$soluong."' WHERE donhang.idDonhang = '".$idDonhang."'";
            mysqli_query($conn, $update);
            echo '<script> window.location="'.$_SESSION['url'].'" </script>';
         }
         else{
            $delete = "DELETE FROM donhang WHERE donhang.idDonhang = '".$_GET['idDonhang']."'";
            mysqli_query($conn, $delete);
            echo '<script> window.location="'.$_SESSION['url'].'" </script>';
         }
      }

      else if(isset($_GET['plus'])){
         $idDonhang = $_GET['idDonhang'];
         $soluong = $_GET['soluong'] + 1;
         $update = "UPDATE donhang SET Soluong = '".$soluong."' WHERE donhang.idDonhang = '".$idDonhang."'";
         mysqli_query($conn, $update);
         echo '<script> window.location="'.$_SESSION['url'].'" </script>';
      }
   }
   else if(isset($_GET['delete']) && isset($_GET['idDonhang'])){
      $delete = "DELETE FROM donhang WHERE donhang.idDonhang = '".$_GET['idDonhang']."'";
      mysqli_query($conn, $delete);
      echo '<script> window.location="'.$_SESSION['url'].'" </script>';
   }