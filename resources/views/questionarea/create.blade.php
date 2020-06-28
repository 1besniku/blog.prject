@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Create new Questionarea</div>


                    <div class="card-body">
                        <form action="/questionnaire" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" placeholder="Enter title">
                                @error('title')
                                <small class="text-danger">
                                    {{  $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="porpose">Porpose</label>
                                <input type="text" class="form-control" name="porpose" id="porpose" value="{{old('porpose')}}" placeholder="Enter porpose">
                                @error('porpose')
                                <small class="text-danger">
                                    {{  $message }}</small>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Create questionarea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
