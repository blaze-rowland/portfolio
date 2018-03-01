<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Revenue;

class RevenueController extends Controller
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
        $revenues  = Revenue::all();
        $projects = Project::all();

        return view('admin.revenue.index')->withRevenues($revenues)->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $revenues = Revenue::all();
        return view('admin.revenue.create')->withRevenues($revenues)->withProjects($projects);
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
          'project_id' => 'required|integer',
          'revenue'    => 'required|string',
          'amount'     => 'required|integer'
        ]);

        $revenue = new Revenue;
        $revenue->project_id = $request->input('project_id');
        if($request->input('revenue') === 'income') {
          $revenue->income = $request->input('amount');
        } else {
          $revenue->expense = $request->input('amount');
        }
        $revenue->save();

        return redirect('/admin/revenue');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
