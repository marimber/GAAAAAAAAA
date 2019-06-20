<?php

namespace App\Http\Controllers;

use App\User;
use App\VideoGames;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit(User $id)
    {
         $user = User::where('_id', '=', $id)->get();
        return view('users.update', compact('user'));
    }

    
    public function update(Request $request)
    {
        $lol = User::orderBy('name');
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return back();
        
    }

    
   public function destroy(User $id)
    {
        $user_id = Auth::id();
        $posts = Post::where('user_id','=', $user_id)->get();
        foreach ($posts as $lol ) {
             $lol->delete();
        }
        User::destroy($user_id);
        return redirect()->route('home');
        
       
    }
    public function show($id)
    {
        return view('users.user');
    }
    
    public function VideoGames()
    {
        $user_id = Auth::id();
        $VideoGames = VideoGames::where('user_id', '=', $user_id)->get();
        return view('VideoGames.myvideogames', compact('VideoGames'));
    }
    public function showPerfil()
    {
        
        return view('users.user');
    }


}


