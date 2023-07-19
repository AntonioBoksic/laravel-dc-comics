@extends("layouts.main-layout")

@section("content")
<h1>
    Comics
    <a href="{{ route('comic.create') }}">+</a>
</h1>

<ul>
    @foreach ($comics as $comic) 
    <li>
        <a href=" {{ route('comic.show', $comic -> id) }} ">
        {{$comic["id"]}}) {{$comic["title"]}}
        </a>
        <br>
        <a class="btn btn-primary" href="">
            EDIT
        </a>
        <a class="btn btn-primary" href="">
            DELETE
        </a>
    </li>
    @endforeach
</ul>
@endsection

