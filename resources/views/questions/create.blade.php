@extends('layout')

@section('title', 'Question | Create')

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/css/plugins/forms/validation/form-validation.min.css') }}">
@endsection

@section('content')
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Question</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST" action="{{ route('questions.store') }}" novalidate>
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">

                                            <!-- Name -->
                                            <div class="col-md-4">
                                                <label for="item-name">NAME</label>
                                                <small class="text-muted">required</small>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <div class="controls">
                                                    <input id="item-name"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           type="text"
                                                           name="name"
                                                           placeholder="name"
                                                           value="{{ old('name') }}"
                                                           maxlength="255"
                                                           required>
                                                    @error('name')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"></i>
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <hr>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="item-answer-0-content">ANSWER 1</label>
                                                <small class="text-muted">required</small>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="controls">
                                                            <input id="item-answer-0-content"
                                                                   class="form-control @error('answers.0.content') is-invalid @enderror"
                                                                   type="text"
                                                                   name="answers[0][content]"
                                                                   placeholder="content"
                                                                   value="{{ old('answers.0.content') }}"
                                                                   maxlength="255"
                                                                   required>
                                                            @error('answers.0.content')
                                                            <div class="invalid-feedback">
                                                                <i class="bx bx-radio-circle"></i>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <div class="custom-control custom-switch">
                                                            <input type="hidden" name="answers[0][is_correct]" value="0">
                                                            <input id="item-answer-0-is-correct"
                                                                   class="custom-control-input"
                                                                   type="checkbox"
                                                                   value="1"
                                                                   name="answers[0][is_correct]" @if(old('answers.0.is_correct')) checked @endif>
                                                            <label class="custom-control-label" for="item-answer-0-is-correct">
                                                                <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                                                <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                                            </label>
                                                            <span id="item-status-text">
                                                                Is Correct
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="item-answer-1-content">ANSWER 2</label>
                                                <small class="text-muted">required</small>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="controls">
                                                            <input id="item-answer-1-content"
                                                                   class="form-control @error('answers.1.content') is-invalid @enderror"
                                                                   type="text"
                                                                   name="answers[1][content]"
                                                                   placeholder="content"
                                                                   value="{{ old('answers.1.content') }}"
                                                                   maxlength="255"
                                                                   required>
                                                            @error('answers.1.content')
                                                            <div class="invalid-feedback">
                                                                <i class="bx bx-radio-circle"></i>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <div class="custom-control custom-switch">
                                                            <input type="hidden" name="answers[1][is_correct]" value="0">
                                                            <input id="item-answer-1-is-correct"
                                                                   class="custom-control-input"
                                                                   type="checkbox"
                                                                   value="1"
                                                                   name="answers[1][is_correct]" @if(old('answers.1.is_correct')) checked @endif>
                                                            <label class="custom-control-label" for="item-answer-1-is-correct">
                                                                <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                                                <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                                            </label>
                                                            <span id="item-status-text">
                                                                Is Correct
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="item-answer-2-content">ANSWER 3</label>
                                                <small class="text-muted">required</small>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="controls">
                                                            <input id="item-answer-2-content"
                                                                   class="form-control @error('answers.2.content') is-invalid @enderror"
                                                                   type="text"
                                                                   name="answers[2][content]"
                                                                   placeholder="content"
                                                                   value="{{ old('answers.2.content') }}"
                                                                   maxlength="255"
                                                                   required>
                                                            @error('answers.2.content')
                                                            <div class="invalid-feedback">
                                                                <i class="bx bx-radio-circle"></i>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <div class="custom-control custom-switch">
                                                            <input type="hidden" name="answers[2][is_correct]" value="0">
                                                            <input id="item-answer-2-is-correct"
                                                                   class="custom-control-input"
                                                                   type="checkbox"
                                                                   value="1"
                                                                   name="answers[2][is_correct]" @if(old('answers.2.is_correct')) checked @endif>
                                                            <label class="custom-control-label" for="item-answer-2-is-correct">
                                                                <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                                                <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                                            </label>
                                                            <span id="item-status-text">
                                                                Is Correct
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="item-answer-3-content">ANSWER 4</label>
                                                <small class="text-muted">required</small>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="controls">
                                                            <input id="item-answer-3-content"
                                                                   class="form-control @error('answers.3.content') is-invalid @enderror"
                                                                   type="text"
                                                                   name="answers[3][content]"
                                                                   placeholder="content"
                                                                   value="{{ old('answers.3.content') }}"
                                                                   maxlength="255"
                                                                   required>
                                                            @error('answers.3.content')
                                                            <div class="invalid-feedback">
                                                                <i class="bx bx-radio-circle"></i>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <div class="custom-control custom-switch">
                                                            <input type="hidden" name="answers[3][is_correct]" value="0">
                                                            <input id="item-answer-3-is-correct"
                                                                   class="custom-control-input"
                                                                   type="checkbox"
                                                                   value="1"
                                                                   name="answers[3][is_correct]" @if(old('answers.3.is_correct')) checked @endif>
                                                            <label class="custom-control-label" for="item-answer-3-is-correct">
                                                                <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                                                <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                                            </label>
                                                            <span id="item-status-text">
                                                                Is Correct
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Save -->
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary shadow">Save</button>
                                            </div>

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

@section('page-vendor-js')
    <script src="{{ asset('frest/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
@endsection

@section('page-js')
    <script type="text/javascript">
        $(document).ready(function () {

            $("input").not("[type=submit]").jqBootstrapValidation();

        });
    </script>
@endsection
