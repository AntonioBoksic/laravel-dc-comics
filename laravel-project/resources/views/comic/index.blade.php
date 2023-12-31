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
        <a class="btn btn-primary" href=" {{ route('comic.edit', $comic -> id) }} ">
            EDIT
        </a>
        <form method="POST" action=" {{ route('comic.delete', $comic -> id) }} ">
            @csrf
            @method("DELETE")
            <input type="submit" value="Delete">
        </form>
    </li>
    @endforeach
</ul>
@endsection

