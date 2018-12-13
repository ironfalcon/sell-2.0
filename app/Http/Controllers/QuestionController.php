<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    //
    public function index()
    {
        //
        $questions = Question::all();
        return view('questions.index', ['questions' =>$questions]);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'question_en' => 'required',
            'answer_en' => 'required',
            ]);

          // create new instance questions with fillable method
          Question::create($request->all());

        return redirect()->route('questions.index');
    }

    public function update(Request $request, $id)
    {
        //
        $question = Question::find($id);
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->save();

        return redirect()->route('questions.index');

    }
}
