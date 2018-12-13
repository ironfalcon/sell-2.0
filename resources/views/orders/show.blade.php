@extends('layouts.app')

@section('content')


<div id="about">
    <div class="container">

      <div class="col-md-12 mb-50" style="box-shadow: 4px 3px 11px 0px rgba(115,115,115,0.32);">

        <hr>
        Идентификатор: {{ $order->id }}
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
        <hr>

</div>
</div>
</div>

  <!-- изменение вопроса/ответа -->
    <div class="modal fade" id="new_FAQ" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Новый вопрос</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <!-- <form enctype="multipart/form-data" action="{{ route('questions.store') }}" method="POST"> -->
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



@endsection
