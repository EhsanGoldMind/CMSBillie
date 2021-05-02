<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if($request->q){
//            dd('dffdgb');
//        }
        $post=Post::paginate(2);
        $category=Category::all();
        $tag=Tag::all();
        return view('welcome1',compact('post','category','tag'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('ShowSingle')->with(['post'=>Post::find($id)]);
    }



}
