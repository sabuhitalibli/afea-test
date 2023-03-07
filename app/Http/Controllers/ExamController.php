<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $questions = Question::with(['answers'])->get();

        return view('exam.index', ['questions' => $questions]);
    }

    public function calculate(Request $request)
    {
        $data = $request->all()['result'];

        $score = 0;

        foreach ($data as $questionID => $answerID) {
            $isCorrect = Answer::where('question_id', $questionID)->where('id', $answerID)->where('is_correct', true)->exists();

            if ($isCorrect) {
                $score++;
            }
        }

        return back()->with(['score' => $score]);
    }
}
