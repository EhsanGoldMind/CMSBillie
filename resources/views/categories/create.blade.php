@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{route('categories.create')}}" class="btn btn-success small">Create new Category</a>
        </div>
        <div class="card card-default">
            <div class="card-header">
                Create Category
            </div>
            <div class="card-body">

                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div>
                       @include('partials.error')
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category name</label>
                        <input type="text" class="form-control" name="categoryname"
                               placeholder="e.g: Electronics & Computers">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

            </div>
        </div>
    </div>

@endsection
