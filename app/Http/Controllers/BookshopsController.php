<?php

namespace App\Http\Controllers;
use App\Bookshops;
use Illuminate\Http\Request;

class BookshopsController extends Controller
{
    
    public function __consturct()
    {
        $this->middleware('auth')->except('index');
         }


     public function index()
     { 
         $bookshop=Bookshops::limit(100)->get();
        

        $view=view('bookshop/index',['bookshop'=> $bookshop]);

        return $view;

     }

     public function create()
     {  

         return view('bookshop/create');
      
     }

     public function store(Request $request)
     {   
        

         $bookshop = Bookshops::create($request->all());


         return redirect(action('BookshopsController@index')) ;
         
     }
     public function edit($id)
    {
        $bookshop = Bookshops::findOrFail($id);
 
        return view('bookshop/edit')->with(compact('bookshop'));
    }

    public function update(Request $request, $id = null)
    {

         $bookshop = Bookshops::findOrFail($id);
        
         $bookshop->fill($request->only(
             'name'
         ));
          
         $bookshop->save();

         return redirect(action('BookshopsController@edit', $id)) ;
    }
    
    public function delete($id)
    {
        Bookshops::destroy($id);

        return redirect(action('BookshopsController@index')) ;
    }

    public function show($id)
    {
        $bookshop = Bookshops::findOrFail($id);
       // $genres = Genres::findOrFail($id);

        return view('bookshop/show')->with(compact('bookshop'));
    }
}    

