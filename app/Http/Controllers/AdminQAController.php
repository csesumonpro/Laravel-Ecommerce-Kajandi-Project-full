<?php

namespace App\Http\Controllers;

use App\CustomerAnswer;
use App\CustomerQuestion;
use Illuminate\Http\Request;

class AdminQAController extends Controller{
    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('admin');
    }
    public function manage_q_a(){
        $qa_list = CustomerQuestion::all();
        return view('backend.qa.qa_list')->with(compact('qa_list'));
    }
    public function delete_qa($question_id){
        $question = CustomerQuestion::find($question_id);
        $question->delete();
        $answer = CustomerAnswer::where('question_id',$question_id)->get();
        foreach ($answer as $del_item){
            $del_item->delete();
        }
        return redirect('/manage-q-a')->with('message_success','Q & A Deleted Successfully');
    }
    public function view_qa($id){
        $question_id = $id;
        $a_list = CustomerAnswer::where('question_id',$id)->get();
        return view('backend.qa.answer_list')->with(compact('a_list','question_id'));
    }
    public function delete_answer($id,$question_id){
        $question = CustomerAnswer::find($id);
        $question->delete();
        return redirect('/view-qa/'.$question_id)->with('message_success','Answer Deleted Successfully');
    }
}
