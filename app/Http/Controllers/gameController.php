<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\game;
use DB;
use Carbon\Carbon;
use Validator, Input, Redirect; 

class gameController extends Controller
{


	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = new game;
        $data = $games->all();
        return view('game',compact('data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gamecreate');

    }




    //
    public function store (Request $request) {
     
           $v = Validator::make($request->all(), [
                'gamename' => 'required|min:5'
            ]);

            if ($v->fails())
            {
                return redirect()->back()->withErrors($v->errors());
            }

            $input = $request->all();

            $game = new game;


            $id = DB::table('games')->insertGetId(
            array('name' => $input['gamename'], 'question' => json_encode($input['question']), 'answer' => json_encode($input['answer']), 'created_at' => Carbon::now() , 'updated_at' => Carbon::now() ));
         
            // ///$game->name = $input['gamename'];
            // // $gmae->question = json_encode($input['question']);
            // // $game->answer = json_encode($input['answer']);


            // // $gmae->question = "['00'=>'2','01'=>'2','20'= >'2','21'=>'0','30'=>'blue']";    
            // // $game->answer = "['00'=>'2','01'=>'2','20'=>'2','21'=>'0','30'=>'blue']"

              
             return view('game');
	}
}
