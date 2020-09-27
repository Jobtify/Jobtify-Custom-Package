<header id="header">

      <!-- Top Header -->
      <div id="top-navbar" class="navbar">
        <div class="container">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="text-link"><i class="fa fa-envelope"></i><span>contacto[@]gdiamante.com.mx</span></a></li>
          </ul>
        </div>
      </div>
      <!-- /Top Header -->

      <!-- Main Header -->
      <div id="main-navbar" class="navbar">
        <div class="container">
          <div class="navbar-header fixhead">
            <!-- Logo -->
            <div class="navbar-brand">
              <a class="logo" href="index.html"><img src="http://gdiamante.com.mx/img/logo.png" alt="logo"></a>
            </div>
            <!-- Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle-btn">
              <span></span>
            </button>
            <!-- Mobile toggle -->

            <!-- Mobile Search toggle -->
            <button class="search-toggle-btn">
              <i class="fa fa-search"></i>
            </button>
            <!-- Mobile Search toggle -->
          </div>


          <!-- Navigation -->
          <ul class="main-navbar nav navbar-nav navbar-right">
            <?php 
              self::printHTML($this->menu, "li");
            ?>
          </ul>
          <!-- Navigation -->

        </div>
      </div>
      <!-- /Main Header -->

    </header>
    <!-- /Header -->


