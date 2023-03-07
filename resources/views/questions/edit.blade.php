@extends('layout')

@section('title', 'Question | Edit')

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
                                <form class="form form-horizontal" method="POST" action="{{ route('questions.update', $question) }}" novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">

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
                                                           value="{{ old('name', $question->name) }}"
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

                                            @foreach($question->answers as $index => $answer)
                                                <input type="hidden" name="answers[{{ $index }}][id]" value="{{ $answer->id }}">
                                                <div class="col-md-4">
                                                    <label for="item-answer-{{ $index }}-content">ANSWER {{ $index+1 }}</label>
                                                    <small class="text-muted">required</small>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="controls">
                                                                <input id="item-answer-{{ $index }}-content"
                                                                       class="form-control @error('answers.'.$index.'.content') is-invalid @enderror"
                                                                       type="text"
                                                                       name="answers[{{ $index }}][content]"
                                                                       placeholder="content"
                                                                       value="{{ old('answers.'.$index.'.content', $answer->content) }}"
                                                                       maxlength="255"
                                                                       required>
                                                                @error('answers.'.$index.'.content')
                                                                <div class="invalid-feedback">
                                                                    <i class="bx bx-radio-circle"></i>
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <div class="custom-control custom-switch">
                                                                <input type="hidden" name="answers[{{ $index }}][is_correct]" value="0">
                                                                <input id="item-answer-{{ $index }}-is-correct"
                                                                       class="custom-control-input"
                                                                       type="checkbox"
                                                                       value="1"
                                                                       name="answers[{{ $index }}][is_correct]" @if(old('answers.'.$index.'.is_correct', $answer->is_correct)) checked @endif>
                                                                <label class="custom-control-label" for="item-answer-{{ $index }}-is-correct">
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
                                            @endforeach

                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button id="item-delete" type="button" class="btn btn-danger shadow mr-1">
                                                    <i class="bx bx-trash"></i>
                                                    Delete
                                                </button>
                                                <button type="submit" class="btn btn-primary shadow">Update</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>

                                <form id="form-delete" action="{{ route('questions.delete', $question) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
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
    <script src="{{ asset('frest/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('frest/app-assets/vendors/js/extensions/polyfill.min.js') }}"></script>
@endsection

@section('page-js')
    <script type="text/javascript">
        $(document).ready(function () {

            $("input").not("[type=submit]").jqBootstrapValidation();

            $('#item-delete').on('click', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete!',
                    confirmButtonClass: 'btn btn-danger',
                    cancelButtonClass: 'btn btn-primary ml-1',
                    buttonsStyling: false,
                }).then(function (result) {
                    if (result.value) {
                        $('#form-delete').submit();
                    }
                })
            });
        });
    </script>
@endsection
