@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="card card-default">
            <div class="card-header">
                Create Posts
            </div>
            <div class="card-body">

                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    @endif

                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                        <div name="nameHelp" class="form-text">Your title must be uniq</div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" cols="5" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="contenttt" class="form-label">Content</label>
{{--                        <textarea name="contenttt" cols="5" rows="5" class="form-control"></textarea>--}}
                        <textarea id="contenttt" name="contenttt"></textarea>

                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">Image</label>
                        <input type="file" name="file">
                    </div>
                     <div class="form-group">
                         <label for="category" class="form-label">Category</label>
                         <select name="category" id="category" class="form-control">

                             @foreach($db as $d)
                             <option value="{{$d->id}}">
                                    {{$d->name}}
                             </option>
                             @endforeach
                         </select>
                     </div>
                        @if($db2->count()>0)
                        <div class="form-group">
                            <label for="tag" class="form-label">Tag</label>
                            <select name="tag[]" id="tag" class="form-control tags-selector" multiple>
                                @foreach($db2 as $d)
                                    <option value="{{$d->id}}">
                                        {{$d->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @endif

                    <div class="mb-3">
                        <label for="publishedat" class="form-label">Published at</label>
                        <input type="text" class="form-control" name="publishedat" id="publishedat">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create my Post</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#contenttt'
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr('publishedat',{
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tags-selector').select2();
        });
    </script>

@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection


