@extends("layouts.main-layout")

@section("content")
<h1>Comics</h1>
<ul>
    @foreach ($comics as $comic) 
    <li>
        <a href=" {{ route('comic.show', $comic -> id) }} ">
        {{$comic["title"]}}
        </a>
    </li>
    @endforeach
</ul>
@endsection

