
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ url('') }}/assets/img/login-logo.png" alt="">
        <span class="d-none d-lg-block">Admin Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a>
            <span>Welcome to Expense Manager</span>
          </a>
          &nbsp;&nbsp;&nbsp;
        </li><!-- End Messages Nav -->

        <li>
            <a class="" style="color:black" href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
            </a>
            &nbsp;
        </li>

          
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->