@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{route('posts.create')}}" class="btn btn-success small">Create new Post</a>
        </div>
        <div class="card card-default">
            <div class="card-header">
                All Posts
            </div>
        </div>
        @if(session()->has('createPost'))
            <div class="alter alert-success my-3">
                {{session()->get('createPost')}}
            </div>
        @elseif(session()->has('UpdatePost'))
            <div class="alter alert-warning my-3">
                {{session()->get('UpdatePost')}}
            </div>
        @elseif(session()->has('deletePost'))
            <div class="alter alert-danger my-3">
                {{session()->get('deletePost')}}
            </div>
        @elseif(session()->has('restore'))
            <div class="alert alert-secondary">
                {{session()->get('restore')}}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{session()->get('error')}}
            </div>
        @endif


        <div class="card-body">
            @if($post->count()>0)
            <table class="table">
                <thead>
                <tr class="d-flex mb-2">
                    <th class="col-3">Image</th>
                    <th class="col-7">Title</th>
                    <th class="col-1">Operations</th>
                    <th class="col-1"></th>
                    <th class="col-2">Category</th>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $posts)
                    <tr class="d-flex">
                        <td class="col-3">
                            <img src="{{asset('/storage/postimages/'.$posts->image)}}" alt="imagepost" title="imagepost"
                                 class="w-50">
                        </td>
                        <td class="col-7">{{$posts->title}}</td>
                        @if($posts->trashed())
                            <td>
                                <form action="{{route('restore.post',['post'=>$posts->id])}}" method="post">
                                    @csrf
                                    @method('put')
                                <button type="submit" class="btn btn-info btn-sm" style="color: white">Restore!</button>
                                </form></td>
                            @else
                            <td class="col-1"><a href="{{route('posts.edit',['post'=>$posts->id])}}"
                                                 class="btn btn-info btn-sm" style="color: white">Edit</a></td>
                        @endif
                        <td class="col-1">
                            <form method="post" action="{{route('posts.destroy',['post'=>$posts->id])}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">
                                    {{$posts->trashed()?'Delete':'Trash'}}
                                </button>
                            </form>
                            </td>
                        <td class="col-2 text-center">
                           {{$posts->category->name}}
                        </td>
                        @endforeach</tr>
                </tbody>
            </table>
            @else
               <h3 class="text-center">There is no record at this moment</h3>
            @endif
        </div>
    </div>

@endsection
