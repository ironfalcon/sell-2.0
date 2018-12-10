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
                                      <li><a class="btn-lash" href="index.html">Главная</a></li>
                                      <li><a class="btn-lash" href="#about">О Нас</a></li>
                                      <li><a class="btn-lash" href="#courses">Курсы</a></li>
                                      <li><a class="btn-lash" href="questions.html">Вопросы</a></li>
                                      <li><a class="btn-lash" href="#">Заказать курс</a></li>
                                  </ul>
                              </div>
                              <!-- Nav End -->
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </header>
      <!-- ##### Header Area End ##### -->


                  <!--  <ul class="nav navbar-nav navbar-right">
                       Authentication Links
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest -->


        @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
