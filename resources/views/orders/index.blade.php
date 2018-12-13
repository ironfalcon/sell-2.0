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
            <td><a class="btn btn-success" href="{{ route('order.show', $order->id) }}">Edit</a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- $table->increments('id');
      $table->string('name', 30);
      $table->string('surname', 30);
      $table->integer('old');
      $table->string('country', 30);
      $table->string('region', 30);
      $table->string('address');
      $table->string('email');
      $table->string('skype')->nullable();
      $table->string('instagram')->nullable();
      $table->string('facebook')->nullable(); -->

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
