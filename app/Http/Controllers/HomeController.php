<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('index', [
            'posts' => Post::whereStatus(1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }
}
