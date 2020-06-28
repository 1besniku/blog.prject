@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{$questionnaire->title}}</h1>

                <form method="post" action="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}">
                    @csrf
                    @foreach($questionnaire->question as $key=>$question)
                        <div class="card">
                            <div class="card-header"><strong>{{$key + 1}} </strong>{{$question->question}}</div>
                            <div class="card">

                                <ul class="list-group">
                                    @foreach($question->answers as $answer)
                                        @error('responses'.$key.'answer_id')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        <label for="answer{{$answer->id}}">
                                            <li class="list-group-item"><input type="radio"
                                                                               name="responses[{{$key}}}][answer_id]"
                                                                               id="answer{{$answer->id}}" class="mr-2"
                                                                               value="{{$answer->id}}">{{$answer->answer}}
                                                <input type="hidden" name="responses[{{$key}}}][question_id]"
                                                       value="{{$question->id}}">
                                            </li>
                                        </label>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach


                <div class="card mt-4">
                    <div class="card-header">Create new Questionarea</div>


                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="survay[name]" id="title"
                                   placeholder="Enter Name">
                            @error('name')
                            <small class="text-danger">
                                {{  $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="text" class="form-control" name="survay[email]" id="porpose"
                                   placeholder="Enter Email">
                            @error('email')
                            <small class="text-danger">
                                {{  $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-success" type="submit">Complete Survey</button>


                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>

@endsection
