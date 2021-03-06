<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class PostsController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth', ['except' => ['show', 'index', 'testBuilder']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $query = $request->search;
            $posts = Post::search($query);
        } else {
            $posts = Post::with('user')->get();
        }

        Log::info('Someone visited the index page.');

        $data = array("posts" => $posts);


       return view('posts.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        if (Auth::check()){
            return view('posts.create');
        } else {
            return view('auth.login');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->session()->flash('successMessage', 'Post created successfully.');
        $value = $request->session()->get("successMessage");


        $rules = Post::$rules;
        
        $this->validate($request, $rules);

        $post = new Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 2;
        $post->save();

        Log::info('Post successfully stored.' . $post);

        return \Redirect::action("PostsController@index");
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
        $data = array("post"=>$post);
        if (!$post) {
            Log::error("Post requested does not exist");
            abort(404);
        }
        return view('posts.show', $data);

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
        $data['post'] = $post;

        if (!$post) {
            Log::error("Post requested does not exist");
            abort(404);
        }
        return view('posts.edit', $data);
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
        $request->session()->flash('successMessage', 'Post edited successfully.');
        $value = $request->session()->get("successMessage");
        $rules = Post::$rules;
        
        $this->validate($request, $rules);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 2;
        $post->save();

        if (!$post) {
            Log::error("Post requested does not exist");
            abort(404);
        }

        return \Redirect::action("PostsController@show", $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->session()->flash('successMessage', 'Post deleted successfully.');
        $value = $request->session()->get("successMessage");
        $post = Post::find($id);
        $post->delete();
        if (!$post) {
            Log::error("Post requested does not exist");
            abort(404);
        }
        return \Redirect::action('PostsController@index');
    }

    public function testBuilder()
    {
        var_dump(DB::table('posts')->get()[0]->title);
    }
}
