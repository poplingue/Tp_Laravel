<?php namespace App\Http\Controllers;
use App\Question;
use App\category;
use App\Question_tag;
use App\Tag;


class FrontController extends Controller {

	public function __construct()
	{
            $this->middleware('guest');
	}

	public function index()
	{
            $questions = Question::paginate(4);
            return view('front.index', compact('questions'));
	}
            public function answer($id,$category_id)
        {
           $question = Question::find($id);
           return view ('front.answer',compact('question'));
        }

}
