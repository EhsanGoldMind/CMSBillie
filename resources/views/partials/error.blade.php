@if($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $rror)
                <li class="list-group-item">
                    {{$rror}}
                </li>
            @endforeach
        </ul>
    </div>
@endif
