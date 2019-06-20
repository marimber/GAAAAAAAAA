<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\VideoGames;

class VideoGamesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $VideoGames = VideoGames::all();
        return view('index', compact('VideoGames'));
    }
    public function myposts()
    {
        return redirect(action('UserController@VideoGames'));
    }
    public function showuser()
    {
        return view('user');
    }

}
