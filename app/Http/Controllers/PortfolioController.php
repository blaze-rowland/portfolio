<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portfolio;
use DB;

class PortfolioController extends Controller
{

    public function __construct() {
      // allows routes to only direct to index and show functions
      $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'ASC')->paginate(15);
        return view('portfolio.index')->withPortfolios($portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
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
            'title'         => 'required|string',
            'body'          => 'required|string',
            'technology'    => 'required|string',
            'cover_image'   => 'required|string'
          ]);
  
          $portfolio = new Portfolio;
          $portfolio->title        = $request->input('title');
          $portfolio->body         = $request->input('body');
          $portfolio->technology   = $request->input('technology');
          $portfolio->design_body  = $request->input('design_body');
          $portfolio->full_image   = $request->input('full_image');
          $portfolio->cover_image  = $request->input('cover_image');
          $portfolio->mobile_image = $request->input('mobile_image');
          $portfolio->desk_image   = $request->input('desk_image');
          $portfolio->save();

          return redirect('/portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio.show')->withPortfolio($portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio.edit')->withPortfolio($portfolio);
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
