<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function allPost()
    {
        return view('all_post', [
            'posts' => Post::whereStatus(1)->orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:10|max:256',
            'image' => 'required|image',
            'post_content' => 'required|string',
        ]);

        $fileName = Post::count() + 1;
        $request->file('image')->storeAs('public/thumbnails', $fileName);
        Post::create([
            'title' => $request->title,
            'image' => "storage/thumbnails/" . $fileName,
            'content' => $request->post_content,
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit', [
            'post' => Post::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:36|max:255',
            'post_content' => 'required|string',
            'image' => 'sometimes|file|image'
        ]);

        $post = Post::find($id);
        if ($request->hasFile('image')) {
            $request->file('image')->storeAs('public/thumbnails', $id);
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->post_content,
            'status' => $request->status,
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
