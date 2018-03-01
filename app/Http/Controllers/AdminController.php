<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
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
        $recent = Post::orderBy('created_at', 'DESC')->take(1)->get();
        return view('admin.home')->withRecent($recent);
    }

    public function testbench()
    {
        return view('auth.testbench');
    }
}
