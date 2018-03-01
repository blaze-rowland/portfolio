<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Client;
use App\Project;
use DB;

class ClientController extends Controller
{

    public function __construct()
    {
      // allows routes to only direct to index and show functions
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('created_at', 'DESC')->paginate(15);
        $projects = Project::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.clients.index')->withClients($clients)->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name'         => 'required|string',
          'email'        => 'required|email',
          'title'        => 'required|string',
          'type'         => 'required|string',
          'budget'       => 'required|integer',
          'due_date'     => 'required|date'
        ]);

        $client = new Client;
        $project = new Project;

        $client->name         = $request->input('name');
        $client->email        = $request->input('email');

        $project->title       = $request->input('title');
        $project->type        = $request->input('type');
        $project->budget      = $request->input('budget');
        $project->due_date    = $request->input('due_date');
        $project->description = $request->input('description');

        $project->save();
        $client ->save();

        $client->project_id = $project->id;
        $client->save();

        $project->client_id = $client->id;
        $project->save();

        return redirect('/admin/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client    = Client::find($id);
        $client_id = $client->id;
        $projects  = DB::table('projects')->where('client_id', $client_id)->get();
        return view('admin.clients.show')->withClient($client)->withProjects($projects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.clients.edit')->withClient($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name'  => 'required|string',
          'email' => 'required|email'
        ]);

        $client = Client::find($id);
        $client->name  = $request->input('name');
        $client->email = $request->input('email');

        $client->save();

        return redirect('/admin/clients');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        $client->projects[0]->delete();
        $client->delete();

        return redirect('/admin/clients');
    }
}
