<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\CustomerQuestion;
use App\CustomerAnswer;

class CustomerQAController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function ask_a_question(Request $request){
        $request->validate([
            'question'=>'required|min:5|max:255'
        ]);
        $question = new CustomerQuestion();
        $question->product_id = $request->product_id;
        $question->user_id = Auth::user()->id;
        $question->question = $request->question;;
        $question->save();
        return redirect('/product-details/'.$request->product_id);
   }
    public function answer_a_question(Request $request){
        $request->validate([
            'answer'=>'required|min:5|max:500'
        ]);
        $question = new CustomerAnswer();
        $question->product_id = $request->product_id;
        $question->user_id = Auth::user()->id;
        $question->answer = $request->answer;;
        $question->question_id = $request->question_id;;
        $question->save();
        return redirect('/product-details/'.$request->product_id);
    }
}
