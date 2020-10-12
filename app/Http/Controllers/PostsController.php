<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $posts = DB::select('SELECT * FROM posts WHERE user_id=? ORDER BY id DESC',[$user_id]);

        $data = [
            'posts'=>$posts
        ];
        return view('posts.posts', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.addpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $att['title'] = $request->input('title');
        $att['content'] = $request->input('content');
        $att['user_id'] = Auth::id();

        //SQL寫入
        DB::insert('INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)', [$att['title'], $att['content'], $att['user_id']]);

        return redirect()->route('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::select('SELECT * FROM posts WHERE id=?', [$id]);
        $data = [
            'post'=>$post[0],
        ];
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
        $post = DB::select('SELECT * FROM posts WHERE id=?', [$id]);
        $data = [
            'post'=>$post[0],
        ];
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
        $att['title'] = $request->input('title');
        $att['content'] = $request->input('content');
        $post = DB::update('UPDATE posts SET title=?, content=? WHERE id=?', [$att['title'], $att['content'], $id]);

        return redirect()->route('post');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM posts WHERE id=?', [$id]);
        return redirect()->route('post');
    }
}
