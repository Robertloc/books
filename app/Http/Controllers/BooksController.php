<?php

namespace App\Http\Controllers;
use App\Books;
use App\Genres;
use App\Publishers;
use Illuminate\Http\Request;

class BooksController extends Controller
{


    public function __consturct()
    {
        $this->middleware('auth')->except('index');
         }


     public function index()
     { 
         $books=Books::limit(100)->get();
        

        $view=view('books/index',['books'=> $books]);

        return $view;

     }

     public function create()
     {  


         $publishers = Publishers::get();
         return view('books/create', ['publishers'=> $publishers]);
      
     }

     public function store(Request $request)
     {   
        

         $books = Books::create($request->all());


         return redirect(action('BooksController@index')) ;
         
     }
     public function edit($id)
    {
        $book = Books::findOrFail($id);
 
        return view('books/edit')->with(compact('book'));
    }

    public function update(Request $request, $id = null)
    {

         $book = Books::findOrFail($id);
        
         $book->fill($request->only([
             'title',
             'authors',
             'image'
         ]));
          
         $book->save();

         return redirect(action('BooksController@edit', $id)) ;
    }
    
    public function delete($id)
    {
        Books::destroy($id);

        return redirect(action('BooksController@index')) ;
    }

    public function show($id)
    {
        $book = Books::findOrFail($id);
    

        return view('books/show')->with(compact('book'));
    }
}    
