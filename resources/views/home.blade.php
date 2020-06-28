@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="/questionnaire/create" class="btn btn-dark">Create new Questionaires</a>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">My Questionnaire</div>

                        <div class="card-body">

                      @foreach($questionnaire as $questionnaire)
                          <li class="list-group-item">
                              <a href="{{$questionnaire->path()}}">{{$questionnaire->title}}</a>
                                <div class="mt-2">
                                    <small>Share URL</small>
                                    <p>
                                        <a href="{{$questionnaire->publicpath()}}">{{$questionnaire->publicpath()}}</a>
                                    </p>

                                </div>
                          </li>
                          @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
