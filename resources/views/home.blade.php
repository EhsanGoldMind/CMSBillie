@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                        @if(session()->has('createFirst'))
                            <div class="alter alert-danger my-3">
                                <ul>
                                    <li>{{session()->get('createFirst')}}</li>
                                </ul>
                            </div>
                            @elseif(session()->has('Tag'))
                            <div class="alter alert-danger my-3">
                                <ul>
                                    <li>{{session()->get('Tag')}}</li>
                                </ul>
                            </div>
                        @endif
                    {{ __('You are logged in!') }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
