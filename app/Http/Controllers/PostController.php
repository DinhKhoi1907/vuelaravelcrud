<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    //  index
    public function index()
    {
        return new PostCollection(Post::all());
    }


    //  add 
    public function store(Request $request)
    {
        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);

        $post->save();

        return response()->json('success');
    }

    // edit
    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    // update
    public function update($id, Request $request)
    {
        $post = Post::find($id);

        $post->update($request->all());

        return response()->json('updated');
    }

    // delete
    public function delete($id)
    {
        $post = Post::find($id);

        $post->delete();

        return response()->json('deleted');
    }
}
