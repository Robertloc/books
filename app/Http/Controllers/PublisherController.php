<?php

namespace App\Http\Controllers;
use App\Publishers;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
            $publisher = Publisher::get();
           
   
           $view=view('books/create',['publisher'=> $publisher]);
   
           return $view;
    }

    public function show($id)
    {
        $publisher = Publishers::findOrFail($id);
    

        return view('books/publisher')->with(compact('publisher'));
    }
    
    public function search(Request $request)
    {
        $publisher = Publishers::
        
        $publisher->fill($request->only([
            'name',
        ]));
         
        $book->save();

        return redirect() ;
   }

}
