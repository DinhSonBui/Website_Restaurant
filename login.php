<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Đăng Nhập</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->

    <!-- FontAwesome JS-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/admin.css" />
  </head>

  <body class="app app-login p-0">
    <?php require_once "connect.php"; ?>
    <?php
      if(isset($_POST['login'])){
        $username =$_POST['username'];
        $password =$_POST['password'];
        $sql ="Select *  From tbl_user Where username = '".$_POST['username']."' and password = '".$_POST['password']."'";
        $result =$conn->query($sql); 
        if($result->num_rows >0) { 
          $row = $result->fetch_array(); 
          if($row['username'] == 'admin') { 
            header('Location: admin.php'); 
          } else { 
            session_start(); 
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['fullname']; 
            $_SESSION['email'] = $row['email'];
            header('Location: index.php'); 
          } 
        } 
        else{ 
          echo '<script>alert("Email or password is fail");</script>'; 
          } 
        } 
    ?>
    <div class="row g-0 app-auth-wrapper">
      <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
        <div class="d-flex flex-column align-content-end">
          <div class="app-auth-body mx-auto">
            <div class="app-auth-branding mb-4">
              <a class="app-logo" href="index.html">
                
              </a>
            </div>
            <h2 class="auth-heading text-center mb-5">
              Chào Mừng Bạn Đến Với Nhà Hàng
            </h2>
            <div class="auth-form-container text-start">
              <form class="auth-form login-form" action="" method="POST">
                <div class="email mb-3">
                  <label class="sr-only" for="signin-email">Tài khoản</label>
                  <input
                    id="signin-email"
                    name="username"
                    type="text"
                    class="form-control signin-email"
                    placeholder="Tài khoản"
                    required="required"
                  />
                </div>
                <!--//form-group-->
                <div class="password mb-3">
                  <label class="sr-only" for="signin-password">Mật khẩu</label>
                  <input
                    id="signin-password"
                    name="password"
                    type="password"
                    class="form-control signin-password"
                    placeholder="Mật khẩu"
                    required="required"
                  />
                  <div class="extra mt-3 row justify-content-between">
                    <div class="col-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="RememberPassword"
                        />
                        <label class="form-check-label" for="RememberPassword">
                          Nhớ mật khẩu
                        </label>
                      </div>
                    </div>
                    <!--//col-6-->
                    <div class="col-6">
                      <div class="forgot-password text-end">
                        <a href="reset-password.php">Quên mật khẩu</a>
                      </div>
                    </div>
                    <!--//col-6-->
                  </div>
                  <!--//extra-->
                </div>
                <!--//form-group-->
                <div class="text-center">
                  <button
                    type="submit"
                    class="btn app-btn-primary w-100 theme-btn mx-auto"
                    name="login"
                  >
                    Đăng nhập
                  </button>
                </div>
              </form>

              <div class="auth-option text-center pt-5">
                Chưa có tài khoản? Đăng ký ngay
                <a class="text-link" href="signup.php">tại đây</a>.
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
      </div>
    </div>
    <!--//row-->
  </body>
</html>
