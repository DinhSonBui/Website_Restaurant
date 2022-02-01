<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--========== BOX ICONS ==========-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Sản Phẩm</title>
  </head>
  <body>
    <?php 
      include("connect.php");
      session_start();
      $total = 0;
    ?>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class="bx bx-chevron-up scrolltop__icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
      <nav class="nav bd-container">
        <a href="index.php#category" class="nav__logo"><em>Epu-Restaurant</em></a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php#home" class="nav__link active-link">Trang chủ</a>
            </li>
            <li class="nav__item">
              <a href="index.php#about" class="nav__link">Nhà hàng</a>
            </li>
            <li class="nav__item">
              <a href="index.php#services" class="nav__link">Dịch vụ</a>
            </li>
            <li class="nav__item">
              <a href="index.php#category" class="nav__link">Loại thực đơn</a>
            </li>
            <li class="nav__item">
              <a href="index.php#menu" class="nav__link">Thực đơn</a>
            </li>
            <li class="nav__item">
              <a href="index.php#contact" class="nav__link">Liên hệ</a>
            </li>

            <li class="nav__item">
              <i class="bx bx-moon change-theme" id="theme-button"></i>
            </li>

            <li class="nav__item" id="cart-btn">
              <a href="#menu" class="nav__link"
                ><i style="font-size: 20px" class="bx bx-cart-alt"></i
              ></a>
            </li>
            <li class="nav__item" id="login-btn">
              <a href="#menu" class="nav__link"
                ><i style="font-size: 20px" class="bx bx-user-circle"></i
              ></a>
            </li>
          </ul>
        </div>
        <div class="shopping-cart">
            <?php
            $cart = (isset($_SESSION['cart'])) ?  $_SESSION['cart'] : []; 
            foreach($cart as $key => $value):
          ?>
          <div class="box">
            <a href="cart.php?id=<?php echo $value['id'] ?>&action=delete"><i class="fas fa-trash"></i></a>
            <img src="assets/img/<?php echo $value['image']; ?>" alt="" />
            <div class="content">
              <h3><?php echo $value['name']; ?></h3>
              <span class="price"><?php echo $value['price']; ?>VND</span>
              <span class="quantity">SL : <?php echo $value['quantify']; ?> </span>
            </div>
          </div>
          <?php
            $total += $value['price']*$value['quantify'];
            endforeach
          ?>
          <div class="total">Tổng : <?php echo $total ?> VND</div>
          <a href="order.php" class="btn">Đặt hàng</a>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>


    <!--========== CONTENT ==========-->
    <section class="menu section bd-container" id="menu">
        <span class="section-subtitle">Epu-Restaurant</span>
        <h2 class="section-title">Menu</h2>
        <div class="menu__container bd-grid">
        <?php
         if(isset($_GET['id'])){
            $category_product = $_GET['id'];
         }
        ?>
       
        <?php
            $sql_product = mysqli_query($conn,"SELECT * FROM tbl_products Where category_product = $category_product");
            while($row_product = mysqli_fetch_assoc($sql_product)){
        ?>
          <div class="menu__content">
            <img src="assets/img/<?php echo $row_product['img_product'] ?>" alt="" class="menu__img" />
            <h3 class="menu__name"><?php echo $row_product['name_product'] ?></h3>
            <span class="menu__detail"> <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i></span>
            <span class="menu__preci"><?php echo $row_product['price_product'] ?> VNĐ</span>
            <a href="cart.php?id=<?php echo $row_product['id_product'] ?>&action=add" class="button menu__button"
              ><i class="bx bx-cart-alt"></i
            ></a>
          </div>
          <?php
            }
          ?>
        </div>
      </section>

       <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
      <?php
              $sql_shop = mysqli_query($conn,"SELECT * FROM tbl_info_shop Order By id ASC");
              while($row_shop = mysqli_fetch_assoc($sql_shop)){
            ?>
      <div class="footer__container bd-grid">
        <div class="footer__content">
          <a href="#" class="footer__logo"><?php echo $row_shop['name_shop'] ?></a>
          <span class="footer__description"></span>
          <div>
            <a href="#" class="footer__social"
              ><i class="bx bxl-facebook"></i
            ></a>
            <a href="#" class="footer__social"
              ><i class="bx bxl-instagram"></i
            ></a>
            <a href="#" class="footer__social"
              ><i class="bx bxl-twitter"></i
            ></a>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Dịch Vụ</h3>
          <ul>
            <li><a href="#" class="footer__link">Món ăn ngon</a></li>
            <li><a href="#" class="footer__link">Thực phẩm tươi</a></li>
            <li><a href="#" class="footer__link">Giao hàng nhanh</a></li>
            <li><a href="#" class="footer__link">Tư vấn 24/7</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Thông Tin</h3>
          <ul>
            <li><a href="#" class="footer__link">Sự kiện</a></li>
            <li><a href="#" class="footer__link">Liên lạc</a></li>
            <li><a href="#" class="footer__link">Giúp đỡ</a></li>
            <li><a href="#" class="footer__link">Dịch vụ</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Liên Lạc</h3>
          <ul>
            <li>Địa chỉ : <?php echo $row_shop['address_shop'] ?></li>
            <li>Email : <?php echo $row_shop['email_shop'] ?></li>
            <li>SĐT : <?php echo $row_shop['phone_shop'] ?></li>
          </ul>
        </div>
      </div>

      <p class="footer__copy">&#169; 2022 <?php echo $row_shop['name_shop'] ?>.</p>
      <?php
          }
        ?>
    </footer>

     <!--========== SCROLL REVEAL ==========-->
     <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
</html>