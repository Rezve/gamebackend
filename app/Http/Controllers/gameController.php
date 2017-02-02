<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\game;
use Carbon\Carbon;
use Validator, Input, Redirect; 

class gameController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['api']]);
    }


    public function index()
    {
        $data = game::paginate(15);
        $id = 1;
        return view('game',compact('data','id'));
    }

     public function levelCreate($level)
    {
        $level = $level;
        return view('gamecreate',compact('level'));
    }

    public function show($id)
    {
        $game = game::findOrFail($id);
        $game = json_decode($game);

        return view('gameshow')->withgame($game);
    }

    
    public function create()
    {
        return view('level');

    }

   // API
    public function api()
    {
            $games = game::all();

            return response()->json($games);
    }



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


            \Session::flash('flash_message', 'Game successfully added!');
             return redirect()->route('game.index');
    }

    public function edit($id)
    {
        // get the game
        $game = game::findOrFail($id);
        //$game = json_decode($game);

        // dd($game->level);
       
        return view('gameedit')->withgame($game);
    }


    public function update(Request $request,$id)
    {
        
        $v = Validator::make($request->all(), [
                'name' => 'required'
            ]);

        if ($v->fails()){
                return redirect()->back()->withErrors($v->errors());
            }
        else {
            // store
            $game = game::find($id);
            $game->name       = $request->input('name');
            $game->level      = $request->input('level');
            $game->question   = $request->input('question');
            $game->answer     = $request->input('answer');
            $game->save();

          
            \Session::flash('message', 'Successfully updated game!');
            return redirect()->action(
                 'gameController@show', ['id' => $id]
                );
        }
    }

    public function destroy($id)
    {
            $game = game::findOrFail($id);

            $game->delete();

            \Session::flash('flash_message', 'Game successfully deleted!');

            return redirect()->route('game.index');
    }
}
