@extends('layouts.app')
@section('content')

    <div class="container">
{{--        <div class="d-flex justify-content-end mb-3">--}}
{{--            <a href="{{route('categories.create')}}" class="btn btn-success small">Create new Category</a>--}}
{{--        </div>--}}
        <div class="card card-default">
            <div class="card-header">
                Update Category
            </div>
            <div class="card-body">
                @foreach($category as $cat)
                <form action="{{route('categories.update',['category'=>$cat->id])}}" method="post">
                    @csrf
                    @method('put')
                    <div>
                        @include('partials.error')
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Category name</label>
                        <input type="text" class="form-control" name="categoryname"
                              value="{{$cat->name}}">
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>

            </div>
        </div>
    </div>

@endsection
