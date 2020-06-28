<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Routing\ResponseFactory::createMany;
class SurveyController extends Controller
{
    //

    public function show(\App\Questionnaire $questionnaire,$slug){
        $questionnaire->load('question.answers');
        return view('survey.show',compact('questionnaire'));

    }
    public function store(\App\Questionnaire $questionnaire){

        $data =request()->validate(
            [
                'responses.*.answer_id' =>'required',
                'responses.*.question_id' =>'required',
                'survay.name' =>'required',
                'survay.email' =>'required|email'
            ]
            );

        $survay = $questionnaire->survays()->create($data['survay']);
        $survay->responses()->createMany($data['responses']);

        return "thenk you";

    }
}
