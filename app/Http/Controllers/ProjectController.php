<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;
use App\Client;
use DB;

class ProjectController extends Controller
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
        $projects = Project::orderBy('created_at', 'DESC')->paginate(15);
        $clients = Client::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.projects.index')->withProjects($projects)->withClients($clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('admin.projects.create')->withClients($clients);
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
          'title'       => 'required',
          'type'        => 'required',
          'client'      => 'required',
          'budget'      => 'required',
          'description' => 'required',
          'due_date'    => 'required'
        ]);

        $project = new Project;
        $project->title       = $request->input('title');
        $project->type        = $request->input('type');
        $project->client_id   = $request->input('client');
        $project->budget      = $request->input('budget');
        $project->description = $request->input('description');
        $project->due_date    = $request->input('due_date');

        $project->save();

        return redirect('/admin/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $project_id = $project->id;
        $clients = DB::table('clients')->where('project_id', $project_id)->get();

        return view('admin.projects.show')->withProject($project)->withClients($clients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit')->withProject($project);
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
          'title'       => 'required',
          'type'        => 'required',
          'budget'      => 'required',
          'description' => 'required',
          'due_date'    => 'required'
        ]);

        $project = Project::find($id);
        $project->title       = $request->input('title');
        $project->type        = $request->input('type');
        $project->budget      = $request->input('budget');
        $project->description = $request->input('description');
        $project->due_date    = $request->input('due_date');

        $project->save();

        return redirect('/admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        $project->delete();

        return redirect('/admin/projects');
    }


    // Project Notes


    public function create_note($id) {
      $project = Project::find($id);
      return view('admin.notes.create')->withProject($project);
    }

    public function edit_note($id) {
      $project = Project::find($id);
      return view('admin.notes.edit')->withProject($project);
    }

    public function update_note(Request $request, $id)
    {
      $this->validate($request, [
        'notes'       => 'required'
      ]);

      $note = Project::find($id);
      $note->notes       = $request->input('notes');

      $note->save();

      return redirect('/admin/projects');
    }
}
