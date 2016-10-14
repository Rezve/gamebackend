<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\game;
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
        $this->middleware('auth', ['except' => ['api']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = game::all();
        $id = 1;
        return view('game',compact('data','id'));
    }

    public function show($id)
    {
        $game = game::findOrFail($id);

        return view('gameshow')->withgame($game);
    }

    
    /**
     * Show the application create dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gamecreate');

    }

   // API
    public function api()
    {
            $games = game::all();

            return response()->json($games);
    }


    //
    public function store (Request $request) {
     
           $v = Validator::make($request->all(), [
                'name' => 'required'
            ]);

            if ($v->fails())
            {
                return redirect()->back()->withErrors($v->errors());
            }

            $input = $request->all();

             game::create($input);

            // $game = new game;


            // $id = DB::table('games')->insertGetId(
            // array('name' => $input['gamename'], 'level' => $input['level'], 'question' => json_encode($input['question']), 'answer' => json_encode($input['answer']), 'created_at' => Carbon::now() , 'updated_at' => Carbon::now() ));
         
            // ///$game->name = $input['gamename'];
            // // $gmae->question = json_encode($input['question']);
            // // $game->answer = json_encode($input['answer']);


            // // $gmae->question = "['00'=>'2','01'=>'2','20'= >'2','21'=>'0','30'=>'blue']";    
            // // $game->answer = "['00'=>'2','01'=>'2','20'=>'2','21'=>'0','30'=>'blue']"

              

            \Session::flash('flash_message', 'Game successfully added!');
             return redirect()->route('game.index');
    }



    public function destroy($id)
    {
            $game = game::findOrFail($id);

            $game->delete();

            \Session::flash('flash_message', 'Game successfully deleted!');

            return redirect()->route('game.index');
    }
}
