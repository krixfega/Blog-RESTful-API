<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $user = auth()->user();

        $blogPost = new BlogPost([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author_id' => $user->id,
        ]);

        $blogPost->save();

        return response()->json(['message' => 'Blog post created successfully'], 201);
    }

    public function index()
    {
        $blogPosts = BlogPost::all();

        return response()->json($blogPosts);
    }

    public function show($id)
    {
        $blogPost = BlogPost::find($id);

        if (!$blogPost) {
            return response()->json(['error' => 'Blog post not found'], 404);
        }

        return response()->json($blogPost);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $blogPost = BlogPost::find($id);

        if (!$blogPost) {
            return response()->json(['error' => 'Blog post not found'], 404);
        }

        $blogPost->title = $request->input('title');
        $blogPost->content = $request->input('content');
        $blogPost->save();

        return response()->json(['message' => 'Blog post updated successfully']);
    }

    public function destroy($id)
    {
        $blogPost = BlogPost::find($id);

        if (!$blogPost) {
            return response()->json(['error' => 'Blog post not found'], 404);
        }

        $blogPost->delete();

        return response()->json(['message' => 'Blog post deleted successfully']);
    }
}
