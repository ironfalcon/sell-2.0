@extends('layouts.app')

@section('content')


<div id="about">
    <div class="container">

      <!-- добавить директиву auth не поставил дял удобства -->
      <a data-toggle="modal" data-target="#new_FAQ" class="btn btn-success" style="margin-bottom:20px;">
          создать новый вопрос/ответ
      </a>
      <!-- endauth -->

      @foreach($questions as $question)
      <div class="col-md-12 mb-100" style="box-shadow: 4px 3px 11px 0px rgba(115,115,115,0.32); margin-bottom:10px; padding-bottom:10px;">
        {{ $question->question }}<br>
        {{ $question->answer }}<br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        data-question="{{ $question->question }}" data-answer="{{ $question->answer }}"
         data-id="{{ route('questions.update', $question->id) }}" data-lang="ru">Изменить</button>
        <hr>
        {{ $question->question_en }}<br>
        {{ $question->answer_en }}<br>
        <!-- добавить auth -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        data-question="{{ $question->question_en }}" data-answer="{{ $question->answer_en }}"
         data-id="{{ route('questions.update', $question->id) }}" data-lang="en">Изменить</button>
      </div>
      @endforeach
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



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form enctype="multipart/form-data" id="formUpdate" action="{{ route('questions.store') }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" id="lang" name="lang">
              <div class="form-group">
                <label for="question" class="col-form-label">Вопрос:</label>
                <input type="text"  name="question" class="form-control" id="question">
              </div>
              <div class="form-group">
                <label for="answer" class="col-form-label">Ответ:</label>
                <textarea class="form-control" name="answer" id="answer"></textarea>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
          </div>
        </div>
      </div>
    </div>


@endsection
