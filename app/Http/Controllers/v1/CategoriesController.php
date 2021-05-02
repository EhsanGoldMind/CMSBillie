<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $categorie=Category::all();
    return view('categories.index',['category'=>$categorie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create(['name'=>$request->categoryname]);
        session()->flash('success','Congratulation you add new category');
        return redirect()->to(route('categories.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        $category=Category::find($category);
       return view(' categories.update',['category'=>$category]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {

        Category::where('id',$category->id)->update(['name'=>$request->categoryname]);
        Session()->flash('update','Congratulation you successfully update category');
        return redirect()->to(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
if($category->posts->count()>0){
    Session()->flash('error','Sorry you cant delete this category because there is post with this category');
    return redirect()->to(route('posts.index'));
}
        Category::where('id',$category->id)->delete();
        Session()->flash('delete','Congratulation you successfully delete category');
        return redirect()->to(route('categories.index'));
    }
}
