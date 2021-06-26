<?php

namespace App\Http\Controllers;

use App\Model\book;
use Illuminate\Http\Request;

class websController extends Controller
{
   public function index(){

  $books= book::all();

 return view('pages.webs.index',compact('books'));

   }

   public function show($id){
$book = book::with('author')->with('categories')->find($id);

    return view('pages.webs.detailse',compact('book'));

   }



   public function search(Request $request){

        $sarch=$request->search;
        $books = book::with('categories')->with('author')->with('publishing')
        ->whereHas('categories', function ($query) use ($sarch){
            $query->where('name', 'like', '%'.$sarch.'%');
        })->orWhereHas('publishing',function($query) use($sarch){
            $query->where('name', 'like', '%'.$sarch.'%');
        })->orWhereHas('author', function ($query) use ($sarch){
            $query->where('name', 'like', '%'.$sarch.'%');
        })->orWhere('name','like','%'.$sarch .'%')->get();
      return view('pages.webs.index',compact('books'));
   }
}
