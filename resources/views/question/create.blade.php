@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Create new Question</div>


                    <div class="card-body">
                        <form action="/questionnaire/{{$questionnaire->id}}/question" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="questions[question]">Title</label>
                                <input type="text" class="form-control" name="question[question]" id="question" value="{{old('question[question]')}}" placeholder="Enter question">
                                @error('question.question')
                                <small class="text-danger">
                                    {{  $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <legend>choices</legend>
                                    <small id="choicehelp" class="form-text text-muted">Give choice that give you most insaight in you are question</small>

                                    <div>
                                        <div class="form-group">
                                            <label for="answer">Answers</label>
                                            <input type="text" class="form-control" name="answers[][answer]" value="{{old('answers.0.answer')}}"id="answer" placeholder="Enter choice 1">
                                            @error('answers.0.answer')
                                            <small class="text-danger">
                                                {{  $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer2">Answers2</label>
                                            <input type="text" class="form-control" name="answers[][answer]" value="{{old('answers.1.answer')}}"id="answer" placeholder="Enter choice 2">
                                            @error('answer.1.answer')
                                            <small class="text-danger">
                                                {{  $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer3">Answer3</label>
                                            <input type="text" class="form-control" name="answers[][answer]" id="answer" value="{{old('answers.2.answer')}}"placeholder="Enter choice 3">
                                            @error('answer.2.answer')
                                            <small class="text-danger">
                                                {{  $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer4">Answes</label>
                                            <input type="text" class="form-control" name="answers[][answer]" id="answer" value="{{old('answers.3.answer')}}" placeholder="Enter choice 4">
                                            @error('answer.3.answer')
                                            <small class="text-danger">
                                                {{  $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <button type="submit" class="btn btn-primary">Create questionarea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
