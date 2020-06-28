<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questionarea.create');
    }

    public function store(Request $request){

         $request->validate([
            'title' =>'required',
            'porpose' =>'required'
        ]);


         $questionnaire = \App\Questionnaire::create([
             'user_id' => auth()->user()->id,
             'title' =>$request->title,
             'purpose' =>$request->porpose,
         ]);

         return redirect('/questionnaire/'.$questionnaire->id);
    }

    public function show(\App\Questionnaire $questionnaire){
        $questionnaire->load('question.answers.responses');

        return view('questionarea.show',compact('questionnaire'));
    }
}
