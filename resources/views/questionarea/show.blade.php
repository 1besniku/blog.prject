@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$questionnaire->title}}</div>

                    <div class="card-body">
                        <a class="btn btn-dark" href="/questionnaire/{{$questionnaire->id}}/question/create">Add new
                            Question</a>
                        <a class="btn btn-dark"
                           href="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}">Take survey</a>
                    </div>
                </div>
                @foreach($questionnaire->question as $question)
                    <div class="card">
                        <div class="card-header">{{$question->question}}</div>
                        <div class="card">
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>{{$answer->answer}}</div>
                                        @if($question->responses->count())
                                            <div>{{intval(($answer->responses->count() * 100) / $question->responses->count())}}
                                                %
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="/questionnaire/{{$questionnaire->id}}/question/{{$question->id}}" method="post">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete Question</button>

                        </form>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
