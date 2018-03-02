<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Revenue;
use App\Client;
use App\Project;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent   = Post::orderBy('created_at', 'DESC')->take(1)->get();
        $income   = DB::table('revenues')->sum('income');
        $expense  = DB::table('revenues')->sum('expense');
        $clients  = Client::count();
        $projects = Project::count();
        return view('admin.home')->withRecent($recent)->withIncome($income)->withExpense($expense)->withClients($clients)->withProjects($projects);
    }

    public function welcome() {
      $posts = Post::orderBy('created_at', 'DESC')->take(3)->get();
      return view('welcome')->withPosts($posts);
    }

    public function testbench()
    {
        return view('auth.testbench');
    }
}
