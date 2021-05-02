@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{route('categories.create')}}" class="btn btn-success small">Create new Category</a>
        </div>
        <div class="card card-default">
            <div class="card-header">
                All Categories
            </div>
        </div>
        @if(session()->has('success'))
            <div class="alter alert-success my-3">
                {{session()->get('success')}}
            </div>
        @elseif(session()->has('update'))
            <div class="alter alert-warning my-3">
                {{session()->get('update')}}
            </div>
        @elseif(session()->has('delete'))
            <div class="alter alert-danger my-3">
                {{session()->get('delete')}}
            </div>
        @endif
        <div class="card-body">
            @if($category->count()>0)
                <table class="table">
                    <thead>
                    <tr class="d-flex mb-2">
                        <th class="col-9">Name</th>
                        <th class="col-1">Operations</th>
                        <th class="col-2"></th>
                        <th class="col-1">Post Count</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cat)
                        <tr class="d-flex">
                            <td class="col-9">{{$cat->name}}</td>
                            <td class="col-1"><a href="{{route('categories.edit',['category'=>$cat->id])}}"
                                                 class="btn btn-warning small">Update</a></td>

                            <td class="col-2 mx-4">
                                <form method="post" action="{{route('categories.destroy',['category'=>$cat->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger small">Delete</button>
                                </form>
                            </td>
                            <td class="col-1" class="btn btn-secondary small">
                                   ( {{ \Illuminate\Support\Facades\DB::table('posts')->where('category_id',$cat->id)->count() }} )
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">There is no <u>Category</u> at this moment</h3>
            @endif
        </div>
    </div>

@endsection
