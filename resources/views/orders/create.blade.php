@extends('layouts.app')

@section('content')


<div id="about">
    <div class="container-fluid">
        <div class="d-flex justify-content-center row bd-highlight">
          @if ($errors->any())
              <div class="alert alert-danger mt-200">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <form enctype="multipart/form-data" action="{{ route('order.store') }}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Имя:</label>
            <input required type="text" class="form-control" name="name" id="name" value="{{ old('name')}}">
            <br>
            <label for="surname">Фамилия:</label>
            <input required type="text" class="form-control" name="surname" id="surname" value="{{ old('surname')}}">
            <br>
            <label for="old">Возраст:</label>
            <input required type="text" class="form-control" name="old" id="old" value="{{ old('old')}}">
            <br>
            <label for="country">Страна:</label>
            <input required type="text" class="form-control" name="country" id="country" value="{{ old('country')}}">
            <br>
            <label for="region">Область:</label>
            <input required type="text" class="form-control" name="region" id="region" value="{{ old('region')}}">
            <br>
            <label for="address">Адрес:</label>
            <input required type="text" class="form-control" name="address" id="address" value="{{ old('address')}}">
            <br>
            <label for="email">Электронная почта:</label>
            <input required type="email" class="form-control" name="email" id="email" value="{{ old('email')}}">
            <small id="emailHelp" class="form-text text-muted">На указанную почту вы получите письмо с информацией о заказе.</small>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="product_id" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">BASIC</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="product_id" id="inlineRadio2" value="2">
              <label class="form-check-label" for="inlineRadio2">PREMIUM</label>
            </div>
            <button type="submit" class="btn btn-success">Заказать</button>
          </div>
        </form>

        </div>
    </div>
</div>


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


@endsection
