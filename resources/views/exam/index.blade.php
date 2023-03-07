@extends('layout')

@section('title', 'Exam')

@section('content')
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if(session()->has('score'))
                                <h1>Your score is: {{ session('score') }}</h1>
                            @endif
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST" action="{{ route('exam.calculate') }}">
                                    @csrf
                                    <div class="form-body">
                                        @foreach($questions as $question)
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="item-name">{{ $question->name }}</label>
                                                </div>
                                                <div class="col-md-8">
                                                    @foreach($question->answers as $answer)
                                                        <div class="form-check">
                                                            <input name="result[{{ $question->id }}]" class="form-check-input" type="radio" value="{{ $answer->id }}" id="answer-{{ $answer->id }}" required>
                                                            <label class="form-check-label" for="answer-{{ $answer->id }}">
                                                                {{ $answer->content }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary shadow">Finish</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
