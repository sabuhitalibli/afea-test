<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestion;
use App\Http\Requests\UpdateQuestion;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::when($request->has('search'), function ($query) use ($request) {
            $search = $request->query('search');

            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        })
            ->latest()
            ->paginate(20);

        return view('questions.index', ['questions' => $questions]);
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(StoreQuestion $request)
    {
        $validated = $request->validated();

        $question = Question::create($validated);

        $question->answers()->createMany($validated['answers']);

        return redirect()->route('questions.index')->with(['toast-type' => 'success', 'message' => 'Question created!']);
    }

    public function edit(Question $question)
    {
        $question->load(['answers']);

        return view('questions.edit', ['question' => $question]);
    }

    public function update(UpdateQuestion $request, Question $question)
    {
        $validated = $request->validated();

        $question->update($validated);

        foreach ($validated['answers'] as $answer) {
            Answer::where('id', $answer['id'])->update($answer);
        }

        return back()->with(['toast-type' => 'success', 'message' => 'Question updated!']);
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('questions.index')->with(['toast-type' => 'success', 'message' => 'Question deleted!']);
    }
}
