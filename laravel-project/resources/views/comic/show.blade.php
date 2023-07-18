@extends("layouts.main-layout")

@section("content")
<h1>Comics SHOW</h1>
<ul>
    
    <div>
        {{$comic["title"]}}
    </div>
    
    <img src="{{$comic['thumb']}}" alt="">
        
    
    <div>
        {{$comic["price"]}}
    </div>
    <div>
        {{$comic["series"]}}
    </div>
    <div>
        {{$comic["sale_date"]}}
    </div>
    <div>
        {{$comic["type"]}}
    </div>
    


@endsection
