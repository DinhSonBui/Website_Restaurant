<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Đăng Ký</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta
      name="description"
      content="Portal - Bootstrap 5 Admin Dashboard Template For Developers"
    />
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- FontAwesome JS-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/admin.css" />
  </head>

  <body class="app app-signup p-0">
  <?php
      if(isset($_POST['register'])){
        require_once "connect.php";
        $fullname =$_POST['fullname'];
        $username =$_POST['username'];
        $password =$_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $sqlCheckUser = "SELECT * FROM tbl_user Where username = '".$_POST['username']."'";
        $resultCheckUser = $conn->query($sqlCheckUser); 
        if($resultCheckUser->num_rows >0)
        {
          echo '<script> alert("Tài khoản này đã tồn tại, vui lòng nhập tài khoản khác");</script>';
        }
        else{
          $sql = "INSERT INTO tbl_user (username,password,fullname,email,phone,address)  VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['fullname']."','".$_POST['email']."', '".$_POST['phone']."','".$_POST['address']."')";
          $result = $conn->query($sql); 
          if($result === TRUE) { 
            header("Location: login.php"); 
          } 
          else{ 
            echo '<script> alert("Đăng ký không thành công");</script>'; 
          } 
          $conn->close(); 
        }
      }
    ?>
    <div class="row g-0 app-auth-wrapper">
      <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
        <div class="d-flex flex-column align-content-end">
          <div class="app-auth-body mx-auto">
            <div class="app-auth-branding mb-4">
              <a class="app-logo" href="index.html"
                ></a>
            </div>
            <h2 class="auth-heading text-center mb-4">Đăng Ký Tài Khoản</h2>

            <div class="auth-form-container text-start mx-auto">
              <form class="auth-form auth-signup-form" action="" method="post">
                <div class="email mb-3">
                  <label class="sr-only" for="signup-email">Tên của bạn</label>
                  <input
                    id="signup-name"
                    name="fullname"
                    type="text"
                    class="form-control signup-name"
                    placeholder="Tên của bạn"
                    required="required"
                  />
                </div>
                <div class="email mb-3">
                  <label class="sr-only" for="signup-email"
                    >Tài khoản của bạn</label
                  >
                  <input
                    id="signup-email"
                    name="username"
                    type="text"
                    class="form-control signup-email"
                    placeholder="Nhập tài khoản"
                    required="required"
                  />
                </div>
                <div class="password mb-3">
                  <label class="sr-only" for="signup-password">Mật khẩu</label>
                  <input
                    id="signup-password"
                    name="password"
                    type="password"
                    class="form-control signup-password"
                    placeholder="Nhập mật khẩu"
                    required="required"
                  />
                </div>
                <div class="email mb-3">
                  <label class="sr-only" for="signup-email"
                    >Email của bạn</label
                  >
                  <input
                    id="signup-email"
                    name="email"
                    type="email"
                    class="form-control signup-email"
                    placeholder="Nhập Email"
                    required="required"
                  />
                </div>
                <div class="email mb-3">
                  <label class="sr-only" for="signup-email"
                    >Địa chỉ của bạn</label
                  >
                  <input
                    id="signup-email"
                    name="address"
                    type="text"
                    class="form-control signup-email"
                    placeholder="Nhập địa chỉ"
                    required="required"
                  />
                </div>
                <div class="email mb-3">
                  <label class="sr-only" for="signup-email"
                    >SDT của bạn</label
                  >
                  <input
                    id="signup-email"
                    name="phone"
                    type="text"
                    class="form-control signup-email"
                    placeholder="Nhập số điện thoại"
                    required="required"
                  />
                </div>
                <div class="extra mb-3">
                  <div class="form-check"></div>
                </div>
                <!--//extra-->

                <div class="text-center">
                  <button
                    type="submit"
                    class="btn app-btn-primary w-100 theme-btn mx-auto"
                    name="register"
                  >
                    Đăng Ký
                  </button>
                </div>
              </form>
              <!--//auth-form-->

              <div class="auth-option text-center pt-5">
                Đã có tài khoản?
                <a class="text-link" href="login.php">Đăng nhập ngay</a>
              </div>
            </div>
            <!--//auth-form-container-->
          </div>
          <!--//auth-body-->

          <footer class="app-auth-footer">
            <div class="container text-center py-3">
              <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
              <small class="copyright"
                >
                <i class="fas fa-heart" style="color: #fb866a"></i>
                <a class="app-link" href="" target="_blank">Epu-Restaurant</a>
              </small>
            </div>
          </footer>
          <!--//app-auth-footer-->
        </div>
        <!--//flex-column-->
      </div>
      <!--//auth-main-col-->
      <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
        <div class="auth-background-holder"></div>
        <div class="auth-background-mask"></div>
        <div class="auth-background-overlay p-3 p-lg-5">
          <div class="d-flex flex-column align-content-end h-100">
            <div class="h-100"></div>
          </div>
        </div>
        <!--//auth-background-overlay-->
      </div>
      <!--//auth-background-col-->
    </div>
    <!--//row-->
  </body>
</html>
