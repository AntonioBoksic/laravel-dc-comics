@extends("layouts.main-layout")

@section("content")

<h1>benvenuto in Edit</h1>

<div>
    <h2>
        Edit Comic
    </h2>
    
</div>

<form method="POST" action= " {{ route('comic.update') }} " >

    @csrf 
    @method("PUT")
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$comic['title']}}">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$comic['description']}}">
    </div>
    <div>
        <label for="thumb">Thumb</label>
        <input type="text" name="thumb" value="{{$comic['thumb']}}">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" name="price" value="{{$comic['price']}}">
    </div>
    <div>
        <label for="series">Series</label>
        <input type="text" name="series" value="{{$comic['series']}}">
    </div>
    <div>
        <label for="sale_date">Sale date</label>
        <input type="date" name="sale_date" value="{{$comic['sale_date']}}">
    </div>
    <div>
        <label for="type">Type</label>
        <input type="text" name="type" value="{{$comic['type']}}">
    </div>

    <input type="submit" value="Update">
</form>


