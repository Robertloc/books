@extends('layouts.app')


@section('content')
<div class="container">
<form method="post" action="{{action('BooksController@store')}}">
@csrf
<div class="form-group">
    <label>Publisher</label>
    <select name="publisher_id">
       @foreach($publishers as $publisher)
        <option value="{{ $publisher->id}}">{{ $publisher->name}}</option>
      @endforeach
    </select>
</div>
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control">
  </div>
  <div class="form-group">
    <label>Authors</label>
    <input type="text" name="authors" class="form-control">
  </div>
  <div class="form-group">
    <label>Image</label>
    <input type="text" name="image" class="form-control">
  </div>
  <div class="form-group">
    <label>Genre</label>
    <input type="number" name="genre_id" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection