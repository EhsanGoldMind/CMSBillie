@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                All Users
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
            @elseif(session()->has('admin'))
            <div class="alert alert-success my-3">
                {{session()->get('admin')}}

            </div>
        @endif


        <div class="card-body">
            @if($users->count()>0)
                <table class="table">
                    <thead>
                    <tr class="d-flex mb-2">
                        <th class="col-1">Avatar</th>
                        <th class="col-2">Name</th>
                        <th class="col-2">E-mail</th>
                        <th class="col-4">About</th>
                        <th class="col-2">Created account_at</th>
                        <th class="col-1">Operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="d-flex">
                            <td class="col-1">
                                @if(!$user->avatar)
                                    <img src="https://www.svgrepo.com/show/9907/male-avatar.svg" alt="avatar" title="avatar" width="50px" height="40px" style="border-radius:50% "/>
                                @else
                                    <img src="{{asset('/storage/AvatarImages/'.$user->avatar)}}" alt="avatar" title="avatar" width="50px" height="40px" style="border-radius:50% "/>
                                @endif

                            </td>
                            <td class="col-2">
                                {{$user->name}}
                            </td>
                            <td class="col-2">{{$user->email}}</td>
                            <td class="col-4">{{$user->about}}</td>
                            <td class="col-2">{{$user->created_at}}</td>
                            <td class="col-1">
                                @if(!$user->isAdmin())
                                    <form action="{{route('makeAdmin',['user'=>$user->id])}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-info btn-sm" style="color: white">
                                            Change to admin
                                        </button>
                                    </form></td>
                                @else
                                      <a href="#" class="btn btn-secondary btn-sm" style="color: white">is admin</a>
                                @endif
                                </td>

                                @endforeach
                        </tr>
                    </tbody>
                </table>
            @else
                <h3 class="text-center">There is no record at this moment</h3>
            @endif
        </div>
    </div>

@endsection
