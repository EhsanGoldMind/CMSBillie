@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card card-default">
            <div class="card-header">
              Add Avatar for your Account
            </div>
        </div>
        @if(session()->has('message'))
            <div class="alter alert-success my-3">
                {{session()->get('message')}}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{session()->get('error')}}
            </div>

        @endif


        <div class="card-body">
            <form action="{{route('UploadAvatar',[$avatar->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <button class="btn btn-success">Send avatar</button>
            </form>
        </div>
    </div>

@endsection
