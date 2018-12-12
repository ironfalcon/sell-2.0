<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Perfect School Lashes</title>

    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

      <!-- ##### Header Area Start ##### -->
      <header class="header-area">
          <!-- Navbar Area -->
          <div class="lash-main-menu">
              <div class="classy-nav-container breakpoint-off">
                  <div class="container-fluid">
                      <!-- Menu -->
                      <nav class="classy-navbar justify-content-between" id="lash-navbar">

                          <!-- Nav brand -->
                          <a href="index.html" class="nav-brand">
                              <img src="{{ asset('img/core-img/logo.png') }}" alt="" class="logo">
                          </a>
                          <!-- Navbar Toggler -->
                          <div class="classy-navbar-toggler">
                              <span class="navbarToggler"><span></span><span></span><span></span></span>
                          </div>

                          <!-- Menu -->
                          <div class="classy-menu">

                              <!-- close btn -->
                              <div class="classycloseIcon">
                                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                              </div>

                              <!-- Nav Start -->
                              <div class="classynav">
                                  <ul>
                                      <li><a class="btn-lash" href="{{ route('index') }}">Главная</a></li>
                                      <li><a class="btn-lash" href="#about">О Нас</a></li>
                                      <li><a class="btn-lash" href="#courses">Курсы</a></li>
                                      <li><a class="btn-lash" href="{{ route('questions.index') }}">Вопросы</a></li>
                                      <li><a class="btn-lash" href="#">Заказать курс</a></li>
                                      @auth
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                           <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                           Logout
                                         </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                         </form>
                                       </div>
                                     </li>
                                    @endauth
                                  </ul>
                              </div>
                              <!-- Nav End -->
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </header>


        @yield('content')

        <!-- ##### Footer Area End ##### -->

        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>

</body>
</html>
