<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
//    public function search(Request $request)
//    {
//        $data=DB::table('posts')->where('content','like','%'.$request->input('query').'%')->get();
//        return view('search',['product'=>$data]);
//        return $data;
//
//    }
    public function search(Request $request)
    {
        $search=\request()->query('search');
        if($search){
            $post=DB::table('posts')->where('content','like','%'.$request->input('query').'%')->get();
            dd ($post);
        }
}
}
