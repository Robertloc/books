@extends('layouts.app')

@section('content')

  <h1>{{ $book->name }}</h1>

  <p>{{ $book->authors }}</p>
  
  <img src="{{ $book->image}}" alt="books">

   <p>{{ $book->genre->name}}</p>

   <p>{{ $book->publisher->name}}</p>

@endsection