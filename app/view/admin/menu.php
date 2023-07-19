<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL ?>/login/dashboard">ADMIN PANEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>/login/dashboard">Trang chu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Thong tin website</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Danh muc bai viet
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/post">Them</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/post/list_post">Liet ke</a></li>
             </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Bai viet
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/post/add_post_text">Them</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/post/list_post_view">Liet ke</a></li>
             </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Danh muc san pham
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/category">Them</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/category/list_category">Liet ke</a></li>
             </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                San pham
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/product/add_product">Them</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/product/list_product">Liet ke</a></li>
             </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Don hang
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/order">Liet ke</a></li>
             </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>/login/loginout">Dang xuat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>