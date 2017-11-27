<?php

namespace App\Http\Controllers;

use App\Post;
use Session;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('static_page.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreate()
    {
        return view('posts.postAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|min:10|max:100',
            'content_main' => 'required|min:50',
            'alias' => 'unique:Posts,alias',
            'meta_desc' => 'max:260',
            "meta_title" => 'min:10'
        ));

            $post = New Post;

            $post->title = $request->title;
            $post->content = $request->content_main;
            $post->alias = $request->alias;


    if($request->hasFile('meta_img')) {
        $meta_img = $request->file('meta_img');
        $filename = time() . '_' . $string = str_random(20) . '.' . $meta_img->getClientOriginalExtension();
        $location = public_path('/tmp/meta_img/' . $filename);
        Image::make($meta_img)->resize(550, 330)->save($location);

        $post->meta_img = $filename;
    }

        if($request->hasFile('img')) {
            $img = $request->file('img');
            $filename = time() . '_'. $string = str_random(20) . '.' . $img->getClientOriginalExtension();
            $location = public_path('/tmp/img/' . $filename);
            Image::make($img)->save($location);

            $post->img = $filename;
        }

            $post->save();

    return redirect('postShow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postIndex()
    {
        $post = Post::all();

        return view('postIndex.home', ['post'=>$post]);
    }

    public function postShow($id)
    {
        $post = Post::find($id);

        return view('posts.showPost', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEdit($id)
    {
        $post = Post::find($id);

        return view('posts.editPost', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDestroy($id)
    {
        //
    }
}
