<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\Post\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
//        Session::flash('message', 'This is a message!');
//        Session::flash('alert-class', 'alert-danger');
        return view('posts.index', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $db1=Category::all();
        $db2=Tag::all();
        return view('posts.create',['db'=>$db1,'db2'=>$db2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('postimages', $filename, 'public');
        $post=Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->contenttt,
            'published_at' => $request->publishedat,
            'image' => $filename,
            'category_id'=>$request->category,
            'user_id'=>auth()->user()->id,
        ]);
        if($request->tag){
            $post->tags()->attach($request->tag);
        }
        session()->flash('createPost', 'Congratulation you create a new Post');
        return redirect()->to(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post])->with('categories',Category::all())->with('db2',Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('postimages', $filename, 'public');
        $post=Post::where('id', $post->id)->update(['title' => $request->title,
            'description' => $request->description,
            'content' => $request->contenttt,
            'published_at' => $request->publishedat,
            'image' => $filename,
            'category_id'=>$request->category
            ]);
//        if($request->tag){
//            $post->tags()->sync($request->tag);
//        }
        if($request->tag){
            $post->tags()->attach($request->tag);
        }
        session()->flash('UpdatePost', 'Congratulation you Update your Post');
        return redirect()->to(route('posts.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        if ($post->trashed()) {
            $post->forceDelete();
            Storage::delete('/public/postimages/' . $post->image);
        } else {
            $post->delete();
        }
        session()->flash('deletePost', 'Congratulation you deleted selected Post');
        return redirect()->to(route('posts.index'));
    }

    public function trash()
    {
        $trash = Post::onlyTrashed()->get();
        return view('posts.index')->withPost($trash);
    }

    public function restore($id)
    {   $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        $post->restore();
        session()->flash('restore','Post restore successfully');
        return redirect()->back();
    }

    public function tagSection(Tag $tag)
    {
        $post_id=$tag->posts()->simplePaginate(3);
        $tags=Tag::all();

        return view('tagSection',compact('tag','post_id','tags'));
    }

    public function categorySection(Category $category)
    {
        $post=$category->posts()->simplePaginate(6);
            $categories=Category::all();
        return view('categorySection',compact('category','categories','post'));
    }
}
