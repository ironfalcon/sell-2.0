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
                                      <li><a class="btn-lash" href="{{ route('order.create') }}">Заказать курс</a></li>
                                      <!-- добавить в auth -->
                                      <li><a class="btn-lash" href="{{ route('order.index') }}">Заказы</a></li>
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

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-dark section-padding-100-0">
            <div class="container-fluid">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-12 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>Меню</h4>
                            </div>
                            <nav>
                                <ul class="footer-nav text-left">
                                    <li><a class="btn-lash" href="index.html">Главная</a></li>
                                    <li><a class="btn-lash" href="#about">О Нас</a></li>
                                    <li><a class="btn-lash" href="#courses">Курсы</a></li>
                                    <li><a class="btn-lash" href="questions.html">Вопросы</a></li>
                                    <li><a class="btn-lash" href="#">Заказать курс</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>



                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-12 col-xl-5">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>Контакты</h4>
                            </div>
                            <nav>
                                <ul class="footer-contacts">
                                    <li><i class="fas fa-envelope"></i> mail@mmail.ru</li>
                                    <li><i class="fas fa-phone"></i> +7-939-999-91-22</li>
                                    <li><i class="fab fa-skype"></i> skype_psl</li>
                                    <li>Social: <i class="fab fa-instagram"></i> <i class="fab fa-facebook-square"></i></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div id="feedback" class="col-12 col-sm-12 col-xl-4">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>Обратная связь</h4>
                            </div>
                            <form method="POST"  action="" >
                                <input type="text" class="form-control mb-2" name="name" id="name" value="" placeholder="Ваше Имя" require>
                                <input type="email" class="form-control mb-2" name="email" id="email"  placeholder="Электронная почта"  require>
                                <input type="text" class="form-control mb-2" name="phone" id="feed-back-phone" placeholder="Телефон" value=""  require>
                                <textarea name="message" id="message"  class="form-control mb-2" cols="30" rows="5" placeholder="Сообщение"></textarea>
                                <button type="submit" type="button" class="btn btn-outline-light mb-5">Отправить</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <!-- ##### Footer Area End ##### -->

        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- Active js -->
        <script src="{{ asset('js/active.js') }}"></script>

        <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var question = button.data('question')
          var answer = button.data('answer')
          var id = button.data('id')
          var lang = button.data('lang')
           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text(question)
          modal.find('#question').val(question)
          modal.find('#answer').val(answer)
          modal.find('#lang').val(lang)
          modal.find('#formUpdate').attr("action", id )

        })

        $('#editOrder').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var route = button.data('route')
          var id = button.data('id')
          var name = button.data('name')
          var surname = button.data('surname')
          var old = button.data('old')
          var country = button.data('country')
          var region = button.data('region')
          var address = button.data('address')
          var email = button.data('email')
          var instagram = button.data('instagram')
          var skype = button.data('skype')
          var facebook = button.data('facebook')
          var status = button.data('status')
          var type = button.data('type')
          var token = button.data('token')
           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('#route').attr("action", route )
          modal.find('.modal-title').text('заказ№' + id)
          modal.find('#name').val(name)
          modal.find('#surname').val(surname)
          modal.find('#old').val(old)
          modal.find('#country').val(country)
          modal.find('#region').val(region)
          modal.find('#address').val(address)
          modal.find('#email').val(email)
          modal.find('#instagram').val(instagram)
          modal.find('#skype').val(skype)
          modal.find('#facebook').val(facebook)
          modal.find('#status').val(status)
          modal.find('#type').val(type)
          modal.find('#token').val(token)
        })

        </script>

</body>
</html>
