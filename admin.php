<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Quan ly</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta
      name="description"
      content="Quan ly"
    />
  
    <!-- FontAwesome JS-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/admin.css" />
    <link id="theme-style" rel="stylesheet" href="assets/css/list.css" />
  </head>

  <body class="app">
  <?php require_once "connect.php"; ?>
    <header class="app-header fixed-top">
      <div class="app-header-inner">
        <div class="container-fluid py-2">
          <div class="app-header-content">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <a
                  id="sidepanel-toggler"
                  class="sidepanel-toggler d-inline-block d-xl-none"
                  href="#"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    viewBox="0 0 30 30"
                    role="img"
                  >
                    <title>Menu</title>
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-miterlimit="10"
                      stroke-width="2"
                      d="M4 7h22M4 15h22M4 23h22"
                    ></path>
                  </svg>
                </a>
              </div>
              <!--//col-->
              <div class="search-mobile-trigger d-sm-none col">
                <i class="search-mobile-trigger-icon fas fa-search"></i>
              </div>
              <!--//col-->
              <div class="app-search-box col">
                <form class="app-search-form">
                  <input
                    type="text"
                    placeholder="Tìm kiếm..."
                    name="search"
                    class="form-control search-input"
                  />
                  <button
                    type="submit"
                    class="btn search-btn btn-primary"
                    value="Search"
                  >
                    <i class="fas fa-search"></i>
                  </button>
                </form>
              </div>
              <!--//app-search-box-->

              <div class="app-utilities col-auto">
                <div
                  class="app-utility-item app-notifications-dropdown dropdown"
                >
                  <a
                    class="dropdown-toggle no-toggle-arrow"
                    id="notifications-dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    title="Notifications"
                  >
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-bell icon"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                      <path
                        fill-rule="evenodd"
                        d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
                      />
                    </svg>
                    <span class="icon-badge">3</span> </a
                  ><!--//dropdown-toggle-->

                  <div
                    class="dropdown-menu p-0"
                    aria-labelledby="notifications-dropdown-toggle"
                  >
                    <div class="dropdown-menu-header p-3">
                      <h5 class="dropdown-menu-title mb-0">Thông báo</h5>
                    </div>
                    <!--//dropdown-menu-title-->
                    <div class="dropdown-menu-content">
                      <div class="item p-3">
                        <div
                          class="row gx-2 justify-content-between align-items-center"
                        >
                          <div class="col-auto">
                            <img
                              class="profile-image"
                              src="assets/img/user.jpg"
                              alt=""
                            />
                          </div>
                          <!--//col-->
                          <div class="col">
                            <div class="info">
                              <div class="desc">
                                Đơn hàng này còn không hả shop ơi
                              </div>
                              <div class="meta">2 giờ trước</div>
                            </div>
                          </div>
                          <!--//col-->
                        </div>
                        <!--//row-->
                        <a class="link-mask" href="notifications.html"></a>
                      </div>
                      <!--//item-->
                      <div class="item p-3">
                        <div
                          class="row gx-2 justify-content-between align-items-center"
                        >
                          <div class="col-auto">
                            <div class="app-icon-holder">
                              <svg
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                class="bi bi-receipt"
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"
                                />
                                <path
                                  fill-rule="evenodd"
                                  d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"
                                />
                              </svg>
                            </div>
                          </div>
                          <!--//col-->
                          <div class="col">
                            <div class="info">
                              <div class="desc">
                               Bạn có đơn hàng mới
                              </div>
                              <div class="meta">1 ngày trước</div>
                            </div>
                          </div>
                          <!--//col-->
                        </div>
                        <!--//row-->
                        <a class="link-mask" href="notifications.html"></a>
                      </div>
                      <!--//item-->
                      <div class="item p-3">
                        <div
                          class="row gx-2 justify-content-between align-items-center"
                        >
                          <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono">
                              <svg
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                class="bi bi-bar-chart-line"
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"
                                />
                              </svg>
                            </div>
                          </div>
                          <!--//col-->
                          <div class="col">
                            <div class="info">
                              <div class="desc">
                                Đơn hàng này đã giao  thành công
                              </div>
                              <div class="meta">1 ngày trước</div>
                            </div>
                          </div>
                          <!--//col-->
                        </div>
                        <!--//row-->
                        <a class="link-mask" href="notifications.html"></a>
                      </div>
                      <!--//item-->
                      <div class="item p-3">
                        <div
                          class="row gx-2 justify-content-between align-items-center"
                        >
                          <div class="col-auto">
                            <img
                              class="profile-image"
                              src="assets/img/user.jpg"
                              alt=""
                            />
                          </div>
                          <!--//col-->
                          <div class="col">
                            <div class="info">
                              <div class="desc">
                                Shop co lego supermen cho trẻ em dưới 8 tuổi không ạ
                              </div>
                              <div class="meta">7 ngày trước</div>
                            </div>
                          </div>
                          <!--//col-->
                        </div>
                        <!--//row-->
                        <a class="link-mask" href="notifications.html"></a>
                      </div>
                      <!--//item-->
                    </div>
                    <!--//dropdown-menu-content-->

                    <div class="dropdown-menu-footer p-2 text-center">
                      <a href="#">View all</a>
                    </div>
                  </div>
                  <!--//dropdown-menu-->
                </div>
                <!--//app-utility-item-->
                <div class="app-utility-item">
                  <a href="#" title="Settings">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-gear icon"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"
                      />
                    </svg>
                  </a>
                </div>
                <!--//app-utility-item-->

                <div class="app-utility-item app-user-dropdown dropdown">
                  <a
                    class="dropdown-toggle"
                    id="user-dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    ><img src="assets/img/user.jpg" alt="user profile"
                  /></a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="user-dropdown-toggle"
                  >
                    <li>
                      <a class="dropdown-item" href="#">Tài khoản</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Cài đặt</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="login.php">Đăng xuất</a>
                    </li>
                  </ul>
                </div>
                <!--//app-user-dropdown-->
              </div>
              <!--//app-utilities-->
            </div>
            <!--//row-->
          </div>
          <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-header-inner-->
      <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
          <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none"
            >&times;</a
          >
          <div class="app-branding">
            <a style="font-size: 40px; margin-left: 50px" class="app-logo" href="#"
              >EPU
           </a
            >
          </div>
          <!--//app-branding-->

          <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link active" href="admin.php">
                  <i class="fas fa-home"></i>
                  <span class="nav-link-text">Trang Chủ</span> </a
                ><!--//nav-link-->
              </li>
              <!--//nav-item-->
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="list-product.php">
                  <i class="fas fa-th"></i>
                  <span class="nav-link-text">Thực đơn</span> </a
                ><!--//nav-link-->
              </li>
              <!--//nav-item-->
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="list-type-product.php">
                  <i class="fas fa-award"></i>
                  <span class="nav-link-text">Loại thực đơn</span> </a
                ><!--//nav-link-->
              </li>
              <!--//nav-item-->
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="list-order.php">
                  <i class="far fa-list-alt"></i>
                  <span class="nav-link-text">Đơn Hàng</span> </a
                ><!--//nav-link-->
              </li>
              
              <!--//nav-item-->

              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="charts.php">
                  <i class="fas fa-chart-line"></i>
                  <span class="nav-link-text">Báo cáo, thống kê</span> </a
                ><!--//nav-link-->
              </li>
              <!--//nav-item-->
             
             
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="list-banner.php">
                  <i class="fas fa-sliders-h"></i>
                  <span class="nav-link-text">Chỉnh sửa banner</span> </a
                ><!--//nav-link-->
              </li>
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="list-info-shop.php">
                  <i class="fab fa-angellist"></i>
                  <span class="nav-link-text">Thông tin nhà hàng</span> </a
                ><!--//nav-link-->
              </li>
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link" href="list-user.php">
                  <i class="fas fa-users"></i>
                  <span class="nav-link-text">Khách Hàng</span> </a
                ><!--//nav-link-->
              </li>
              <!--//nav-item-->
            </ul>
            <!--//app-menu-->
          </nav>
          <!--//app-nav-->
          <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
              <ul class="app-menu footer-menu list-unstyled">
                
                <!--//nav-item-->
                <li class="nav-item">
                  <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                  <a
                    class="nav-link"
                    href="login.php"
                  >
                  <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-link-text">Đăng xuất</span> </a
                  ><!--//nav-link-->
                </li>
                <!--//nav-item-->
                <!--//nav-item-->
              </ul>
              <!--//footer-menu-->
            </nav>
          </div>
          <!--//app-sidepanel-footer-->
        </div>
        <!--//sidepanel-inner-->
      </div>
      <!--//app-sidepanel-->
    </header>
    <!--//app-header-->

    <div class="app-wrapper">
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h1 class="app-page-title">Thống Kê</h1>

          <!--//app-card-->
          <?php
            $sql_count_users = mysqli_query($conn,"SELECT COUNT(*) as total FROM tbl_user");
            $result_count_users = mysqli_fetch_assoc($sql_count_users);

            $sql_count_products = mysqli_query($conn,"SELECT COUNT(*) as total FROM tbl_products");
            $result_count_products = mysqli_fetch_assoc($sql_count_products);

            $sql_count_carts = mysqli_query($conn,"SELECT COUNT(*) as total FROM tbl_cart");
            $result_count_carts = mysqli_fetch_assoc($sql_count_carts);
            $sql_count_category = mysqli_query($conn,"SELECT COUNT(*) as total FROM tbl_category");
            $result_count_category = mysqli_fetch_assoc($sql_count_category);
          ?>
          <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
              <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">tổng Số Khách Hàng</h4>
                  <div class="stats-figure"> <?php echo $result_count_users['total'] - 1; ?></div>
                  <div class="stats-meta text-success"></div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->

            <div class="col-6 col-lg-3">
              <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">tổng Số thực đơn</h4>
                  <div class="stats-figure"> <?php echo $result_count_products['total']; ?></div>
                  <div class="stats-meta text-success"></div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
              </div>
              <!--//app-card-->
            </div>
            <div class="col-6 col-lg-3">
              <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">tổng Số loại sp</h4>
                  <div class="stats-figure">  <?php echo $result_count_category['total']; ?></div>
                  <div class="stats-meta text-success"></div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
              </div>
              <!--//app-card-->
            </div>
			<div class="col-6 col-lg-3">
				<div class="app-card app-card-stat shadow-sm h-100">
				  <div class="app-card-body p-3 p-lg-4">
					<h4 class="stats-type mb-1">tổng Số đơn hàng</h4>
					<div class="stats-figure">  <?php echo $result_count_carts['total']; ?></div>
					<div class="stats-meta text-success"></div>
				  </div>
				  <!--//app-card-body-->
				  <a class="app-card-link-mask" href="#"></a>
				</div>
				<!--//app-card-->
			  </div>
            <!--//col-->
              <!--//app-card-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->
          <div class="row g-4 mb-4">
            <section class="home-content">
                <h1 class="heading">Khách Hàng Mới</h1>
                <div class="list-products">
                    <div style="overflow-x: auto">
                        <table>
                            <thead>
                            <tr>
                                <th>Tên đầy đủ</th>
                                <th>Tài khoản</th>
                                <th>email</th>
                                <th>địa chỉ</th>
                                <th>số điện thoại</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_user = mysqli_query($conn,"SELECT * FROM tbl_user Where username != 'admin' Order By id DESC LIMIT 15");
                                while($row_user = mysqli_fetch_assoc($sql_user)){
                                ?>
                                <tr>
                                    <td><?php echo $row_user['fullname'] ?></td>
                                    <td><?php echo $row_user['username'] ?></td>
                                    <td><?php echo $row_user['email'] ?></td>
                                    <td><?php echo $row_user['phone'] ?></td>
                                    <td><?php echo $row_user['address'] ?></td>
                                
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>    
                </section>
          </div>
          <!--//row-->
        
          <!--//row-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-content-->

      <footer class="app-footer">
        <div class="container text-center py-3">
          <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
          <small class="copyright"
            >
            
            <a
              class="app-link"
              href=""
              target="_blank"
              >EPU-Vegetable</a
            >
            </small
          >
        </div>
      </footer>
      <!--//app-footer-->
    </div>
    <!--//app-wrapper-->

    <!-- Javascript -->
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>
  </body>
</html>
