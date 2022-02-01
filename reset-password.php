<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Quên Mật Khẩu</title>

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

  <body class="app app-reset-password p-0">
  <?php
      include "connect.php";
      if(isset($_POST['edit'])){
        $username =$_POST['username'];
        $sql ="Select username  From tbl_user Where username = '".$_POST['username']."'";
        $result =$conn->query($sql); 
        if($result->num_rows >0) {
          if(isset($_POST['edit'])){
            $password = $_POST['password']; 
            $sql ="UPDATE tbl_user SET password='$password' Where username = '$username'"; 
            $result = $conn->query($sql); 
            if($result === TRUE){ 
              header("Location: login.php"); 
            } 
            else{ 
              echo '<script> alert("Đổi mật khẩu không thành công");</script>'; 
            } 
            $conn->close(); 
          } 
        } 
        else{ 
            echo '<script>alert("Tài khoản này không tồn tại !!");</script>';
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
            <h2 class="auth-heading text-center mb-4">Lấy Lại Mật Khẩu</h2>

            <div class="auth-intro mb-4 text-center">
              Vui lòng nhập tài khoản của bạn ở dưới đây !
            </div>

            <div class="auth-form-container text-left">
              <form class="auth-form resetpass-form" action="" method="post">
                <div class="email mb-3">
                  <label class="sr-only" for="reg-email">tài khoản</label>
                  <input
                    id="reg-email"
                    name="username"
                    type="text"
                    class="form-control login-email"
                    placeholder="Nhập tài khoản"
                    required="required"
                  />
                </div>
                <div class="email mb-3">
                  <label class="sr-only" for="reg-email">mật khẩu</label>
                  <input
                    id="reg-email"
                    name="password"
                    type="text"
                    class="form-control login-email"
                    placeholder="Nhập mật khẩu mới"
                    required="required"
                  />
                </div>
                <!--//form-group-->
                <div class="text-center">
                  <button
                  name="edit"
                    type="submit"
                    class="btn app-btn-primary btn-block theme-btn mx-auto"
                  >
                    Đổi mật khẩu
                  </button>
                </div>
              </form>

              <div class="auth-option text-center pt-5">
                <a class="app-link" href="login.php">Đăng nhập</a>
                <span class="px-2">|</span>
                <a class="app-link" href="signup.php">Đăng ký</a>
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
                <a
                  class="app-link"
                  href="http://themes.3rdwavemedia.com"
                  target="_blank"
                  >Epu-Restaurant</a
                >
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
