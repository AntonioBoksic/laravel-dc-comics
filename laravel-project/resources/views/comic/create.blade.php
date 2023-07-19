@extends("layouts.main-layout")

@section("content")

<h1>benvenuto in create</h1>

<div>
    <h2>
        New Comic
    </h2>
    
</div>

<form `action=" {{ route('comic.store') }} " method="POST">
    @csrf 

    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>

    <div>
        <label for="description">Description</label>
        <input type="text" name="description">
    </div>

    <div>
        <label for="thumb">Thumb</label>
        <input type="text" name="thumb">
    </div>

    <div>
        <label for="price">Price</label>
        <input type="text" name="price">
    </div>

    <div>
        <label for="series">Series</label>
        <input type="text" name="series">
    </div>

    <div>
        <label for="sale_date">Sale date</label>
        <input type="date" name="sale_date">
    </div>

    <div>
        <label for="type">Type</label>
        <input type="text" name="type">
    </div>

    <input type="submit" value="Create">
</form>