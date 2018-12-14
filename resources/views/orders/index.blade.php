@extends('layouts.app')

@section('content')


<div id="about">
    <div class="container">

      <div class="col-md-12 mb-50" style="box-shadow: 4px 3px 11px 0px rgba(115,115,115,0.32);">

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Регион</th>
            <th scope="col">Курс</th>
            <th scope="col">Статус заказа</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)
          <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>{{ $order->client->name }}</td>
            <td>{{ $order->client->surname }}</td>
            <td>{{ $order->client->region }}</td>
            <td>{{ $order->product->name }}</td>
            <td>{{ $order->order_state }}</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editOrder"
                data-route="{{ route('order.update', $order->id) }}" data-id="{{ $order->id }}"
                data-name="{{ $order->client->name }}" data-surname="{{ $order->client->surname }}"
                data-old="{{ $order->client->old }}" data-country="{{ $order->client->country }}"
                data-region="{{ $order->client->region }}" data-address="{{ $order->client->address }}"
                data-email="{{ $order->client->email }}" data-instagram="{{ $order->client->instagram or 'не указан' }}"
                data-skype="{{ $order->client->skype or 'не указан' }}" data-facebook="{{ $order->client->facebook or 'не указан' }}"
                data-status="{{ $order->order_state or 'не указан' }}" data-type="{{ $order->product->name or '' }}"
                data-token="{{ $order->token or 'не назначен' }}" >Изменить</button>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Идентификатор: {{ $order->id }}
      <hr>
      Имя: {{ $order->client->name or '' }}
      <hr>
      Фамилия: {{ $order->client->surname or '' }}
      <hr>
      Возраст: {{ $order->client->old or '' }}
      <hr>
      Страна: {{ $order->client->country or '' }}
      <hr>
      Регион: {{ $order->client->region or '' }}
      <hr>
      Адрес: {{ $order->client->address or '' }}
      <hr>
      Email: {{ $order->client->email or '' }}
      <hr>
      Instagram: {{ $order->client->instagram or 'не указан' }}
      <hr>
      Skype: {{ $order->client->skype or 'не указан' }}
      <hr>
      Facebook: {{ $order->client->facebook or 'не указан' }}
      <hr>
      Статус заказа: {{ $order->order_state or 'не указан' }}
      <hr>
      Тип заказа: {{ $order->product->name or '' }}
      <hr>
      Токен: {{ $order->token or 'не назначен' }}
      <hr> -->

    </div>
</div>
</div>





<!-- Создание нового вопроса/ответа -->
  <div class="modal fade" id="new_FAQ" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Новый вопрос</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="{{ route('questions.store') }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="question">Вопрос:</label>
              <input required type="text" class="form-control" name="question" id="question" value="{{ old('question') }}">
              <br>
              <label for="answer">Ответ:</label>
              <textarea name="answer" id="answer"  class="form-control mb-2" cols="30" rows="4" placeholder="answer"></textarea>
              <br>
              <hr>
              <label for="question_en">Вопрос(en):</label>
              <input required type="text" class="form-control" name="question_en" id="question" value="{{ old('question_en') }}">
              <br>
              <label for="answer">Ответ(en):</label>
              <textarea name="answer_en" id="answer_en"  class="form-control mb-2" cols="30" rows="4" placeholder="answer"></textarea>
              <br>
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- изменение вопроса/ответа -->
    <div class="modal fade" id="editOrder" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Новый вопрос</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form enctype="multipart/form-data" id="route" action="{{ route('questions.store') }}" method="POST">
              {{ csrf_field() }}

              <div class="form-group" id="form-edit">
                <label for="name">Имя:</label>
                <input required type="text" class="form-control" name="name" id="name">
                <br>
                <label for="surname">Фамилия:</label>
                <input required type="text" class="form-control" name="surname" id="surname">
                <br>
                <label for="old">Возраст:</label>
                <input required type="number" class="form-control" name="old" id="old">
                <br>
                <label for="country">Страна:</label>
                <input required type="text" class="form-control" name="country" id="country">
                <br>
                <label for="region">Область:</label>
                <input required type="text" class="form-control" name="region" id="region">
                <br>
                <label for="address">Адрес:</label>
                <input required type="text" class="form-control" name="address" id="address">
                <br>
                <label for="email">Электронная почта:</label>
                <input required type="email" class="form-control" name="email" id="email">
                <small id="emailHelp" class="form-text text-muted">На указанную почту вы получите письмо с информацией о заказе.</small>
                <br>
                <label for="address">Статус:</label>
                <input required type="text" class="form-control" name="status" id="status" >
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="product_id" id="inlineRadio1" value="1" checked>
                  <label class="form-check-label" for="inlineRadio1">BASIC</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="product_id" id="inlineRadio2" value="2">
                  <label class="form-check-label" for="inlineRadio2">PREMIUM</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" name="token_created" type="checkbox" id="inlineCheckbox1" value="create">
                  <label class="form-check-label" for="inlineCheckbox1">Сгенерировать уникальный токен</label>
                </div>
                <br>
                <hr>
                Дополнительные контактные данные:
                <label for="skype">Skype:</label>
                <input type="text" class="form-control" name="skype" id="skype">
                <br>
                <label for="instagram">Instagram:</label>
                <input type="text" class="form-control" name="instagram" id="instagram">
                <br>
                <label for="facebook">Facebook:</label>
                <input type="text" class="form-control" name="facebook" id="facebook">
                <br>
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
              <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
          </div>

        </div>
      </div>
    </div>



@endsection
