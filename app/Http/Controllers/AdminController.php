<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Revenue;
use App\Client;
use App\Project;
use Mail;
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
        $this->middleware('auth', ['except' => ['welcome', 'postContact', 'about']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent     = Post::orderBy('created_at', 'DESC')->take(1)->get();
        $income     = DB::table('revenues')->sum('income');
        $expense    = DB::table('revenues')->sum('expense');
        $clients    = Client::count();
        $projects   = Project::count();
        $due = Project::orderBy('due_date', 'DESC')->where('due_date', '>=', DB::raw('curdate()'))->take(1)->get();
        return view('admin.home')->withRecent($recent)->withIncome($income)->withExpense($expense)->withClients($clients)->withProjects($projects)->withDue($due);
    }

    public function welcome() {
      $posts = Post::orderBy('created_at', 'DESC')->take(3)->get();
      return view('welcome')->withPosts($posts);
    }

    public function postContact(Request $request) {
      $this->validate($request, [
        'name'    => 'required|min:2',
        'email'   => 'required|email',
        'message' => 'required|min:10'
      ]);

      $data = array(
        'name'    => $request->name,
        'email'   => $request->email,
        'bodyMessage' => $request->message
      );


      Mail::send('emails.contact', $data, function($message) use ($data) {
        $message->from($data['email']);
        $message->to('contact@blazerow.com');
        $message->subject('New Client Alert! - ' . $data['name']);
      });

      return redirect('/')->with('status', 'E-Mail Sent!');
    }

    public function about() {
      return view('pages.about');
    }

    public function testbench()
    {
        return view('auth.testbench');
    }
}
