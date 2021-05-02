@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <h2 style=" text-shadow: 2px 2px #66ffff;font-family: Times New Roman, Times, serif;">My Profile</h2>
                <table class="table">
                    <thead>
                <tr class="d-flex mb-2">
                <th class="col-md-2"></th>
                <th class="col-md-8 text-center">
                    @foreach($user as $u)
                    <img src="{{asset('/storage/AvatarImages/'.$u->avatar)}}" alt="avatar" title="avatar"  width="200px" height="200px" style="border-radius:50% "/>

                </th>
                <th class="col-md-2"></th>
                </tr>
                    </thead>
                </table>
            </div>
        </div>


        <div class="card-body">
            <table class="table">
            <tbody>
            <tr class="d-flex">
                <td class="col-md-3">SignsUp Date Website: {{$u->created_at->format('Y-M-D')}}</td>
                <td class="col-md-3">Website Access Role : {{$u->role}}</td>
                <td class="col-md-3">E-mail Address : {{$u->email}}</td>
                <td class="col-md-3">Published Post By User : {{\Illuminate\Support\Facades\DB::table('posts')->where('user_id',$u->id)->count()}}</td>
                @endforeach
            </tr>
            </tbody>
            </table>
        </div>

    </div>

@endsection
