@extends('layouts.app')

@section('content')
    <h1>Books</h1>
    @foreach($books as $book)
    <div id="books">
        <img src="{{ $book->image }}" alt="title"/>
        <a href="{{action('BooksController@show', $book->id)}}">
        <h2>{{ $book->title }}</h2>
        </a>
        <h3>{{ $book->authors }}</h3>
        <h3>{{ $book->genre->name }}</h3>
        <h3>{{ $book->publisher->name }}</h3>
    <a href="{{ action('BooksController@edit', $book->id)}}" class="btn btn-default bg-secondary">Edit</a>
    <a href="{{ action('BooksController@delete', $book->id)}}" class="btn btn-default bg-secondary">Delete</a>
    </div>
    @endforeach
@endsection