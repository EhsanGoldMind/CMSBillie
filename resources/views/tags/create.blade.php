@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{route('tags.create')}}" class="btn btn-success small">Create new tag</a>
        </div>
        <div class="card card-default">
            <div class="card-header">
                Create Tag
            </div>
            <div class="card-body">

                <form action="{{route('tags.store')}}" method="post">
                    @csrf
                    <div>
                     @include('partials.error')
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tag name</label>
                        <input type="text" class="form-control" name="tagname"
                               placeholder="e.g: Cool and fun ">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

            </div>
        </div>
    </div>

@endsection
