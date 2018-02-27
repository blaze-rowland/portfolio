<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostController extends Controller
{

    public function __construct()
    {
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
        $posts = Post::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.blog.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
          'title' => 'required',
          'body'  => 'required'
        ]);

        $post = new Post;
        $post->title       = $request->input('title');
        $post->body        = $request->input('body');
        $post->cover_image = $request->input('cover_image');
        $post->user_id     = auth()->user()->id;
        $post->save();

        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.blog.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id){
          return redirect('/admin/posts')->withError('Unauthorized Page');
        }

        $post = Post::find($id);
        return view('admin.blog.edit')->withPost($post);
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
        'cover_image' => 'required',
        'body'        => 'required'
      ]);

      $post = Post::find($id);
      $post->title       = $request->input('title');
      $post->cover_image = $request->input('cover_image');
      $post->body        = $request->input('body');

      $post->save();

      return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if(auth()->user()->id !== $post->user_id) {
          return redirect('/admin/posts')->withError('Unauthorized Page');
        }

        $post->delete();

        return redirect('/admin/posts');
    }
}
