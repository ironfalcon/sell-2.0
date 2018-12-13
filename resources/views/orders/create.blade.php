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
            <input required type="number" class="form-control" name="old" id="old" value="{{ old('old')}}">
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
              <input class="form-check-input" type="radio" name="product_id" id="inlineRadio1" value="1" checked>
              <label class="form-check-label" for="inlineRadio1">BASIC</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="product_id" id="inlineRadio2" value="2">
              <label class="form-check-label" for="inlineRadio2">PREMIUM</label>
            </div>
            <br>
            <hr>
            Дополнительные контактные данные:
            <label for="skype">Skype:</label>
            <input type="text" class="form-control" name="skype" id="skype" value="{{ old('skype')}}">
            <br>
            <label for="instagram">Instagram:</label>
            <input type="text" class="form-control" name="instagram" id="instagram" value="{{ old('instagram')}}">
            <br>
            <label for="facebook">Facebook:</label>
            <input type="text" class="form-control" name="facebook" id="facebook" value="{{ old('facebook')}}">
            <br>
            <button type="submit" class="btn btn-success">Заказать</button>
          </div>
        </form>

        </div>
    </div>
</div>



@endsection
