@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="card card-default">
            <div class="card-header">
                Edit Posts
            </div>
            <div class="card-body">
{{--@foreach($posts as $post)--}}
                <form action="{{route('posts.update',[$post->id])}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
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

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                        <div name="nameHelp" class="form-text">Your title must be uniq</div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" cols="5" rows="5" class="form-control">{{$post->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="contenttt" class="form-label">Content</label>
                        <textarea id="contenttt" name="contenttt">{{$post->content}}</textarea>

                    </div>

                    <div class="form-group">
                        <img src="{{asset('/storage/postimages/'.$post->image)}}" alt="imagepost" title="imagepost"
                             class="w-50">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Image</label>
                        <input type="file" name="file">
                    </div>

                    <div class="form-group">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-control">

                            @foreach($categories as $d)
                                <option value="{{$d->id}}"
                                @if(isset($post))
                                @if($d->id === $post->category_id)
                                    selected
                                    @endif
                                    @endif
                                >
                                    {{$d->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <?php
                    $dd=App\Models\Tag::all();
                    ?>
                         @if($dd->count()>0)

                    <div class="form-group">
                        <label for="tag" class="form-label">Tag</label>
                        <select name="tag" id="tag" class="form-control tags-selector" multiple>
                            @foreach($db2 as $d)
                                <option value="{{$d->id}}"
                                        @if(isset($post))
                                            @if(in_array($d->id,$post->tags->pluck('id')->toArray()))
                                        selected
                                    @endif
                                    @endif
                                >
                                    {{$d->name}}
                                </option>

                                @endforeach
                        </select>
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="publishedat" class="form-label">Published at</label>
                        <input type="text" class="form-control" name="publishedat" id="publishedat" value="{{$post->published_at}}">
                    </div>
{{--                        @endforeach--}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Update my Post</button>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
