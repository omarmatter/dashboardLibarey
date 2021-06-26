<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookRequest;
use App\Model\book;
use App\Model\author;
use App\Model\publish;
use App\Model\categorey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;

class BookController extends Controller
{



public function index(){

    $books =book::with('categories')->with('author')->with('publishing')->get();
     return view('pages.book.ShowBook',compact('books'));
}





    public function create()
    {
        $catogeries=categorey::all();
        $Authors=author::all();
        $publishs=publish::all();
        return view('pages.book.StoreBook', compact('catogeries','Authors','publishs'));

}

public function store(bookRequest $request)
{

$book = new book();
$book->name = $request->title;
$book->categories_id=$request->Categorey;
$book->author_id  =$request->Author;
$book->publishing_id  =$request->publish;

$book->Release_Date =$request->Release_Date;
$book->number =$request->number;
$book->descriptaion =$request->descriptaion;


    $image= $request->file('image');
    $path='images/';
    $name=time()+rand(1,10000).'.'.$image->getClientOriginalExtension();
    Storage::disk('public')->put($path.$name,file_get_contents($image));
$book->image=$path.$name;
if ($book->save()) {
    return redirect()->back()->with('success', "book saved successfully");
  }

}
  public function edit($id)
    {
      $book=book::with('categories')->with('author')->with('publishing')->find($id);
      $catogeries = categorey::all();
      $publishs= publish::all();
      $Authors=author::all();
      return view('pages.book.EditBook',compact('book','catogeries','Authors','publishs'));

  }

  public function update($id,Request $request){

    $book =book::find($id);
   $rs= $book->update([
        'name' =>$request->title,
        'categories_id'=>$request->Categorey,
        'author_id'  =>$request->Author,
        'publishing_id'  =>$request->publish,
        'Release_Date'  =>$request->Release_Date,
        'number'  =>$request->number,
       'descriptaion'=> $request->descriptaion,


    ]);
    if ($rs) {
        return redirect()->back()->with('success', "book Edit successfully");
      }



    }





public function destroy($id)
{
  $rs=  book::find($id)->delete();
  if ($rs) {
    return redirect()->back()->with('success', "book delete successfully");
  }
}

}
