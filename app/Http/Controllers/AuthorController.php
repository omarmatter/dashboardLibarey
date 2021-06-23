<?php

namespace App\Http\Controllers;

use App\Model\author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{


public  function index()
{
   $authors= author::all();

   return view('pages.author.ShowAuthor',compact('authors'));
}



public function create()
{

    return view('pages.author.storeAuthor');

}


    public function store(AuthorRequest $request){

    $author = new author();
  $author->name =$request->name;

  if ($author->save()) {
    return redirect()->back()->with('success', "author saved successfully");
  }

    }
  public function edit($id)
  {
    $author=author::find($id);

    return view('pages.author.EditAuthor',compact('author'));

}

public function update($id,Request $request){

    $author=author::find($id);
  $rs=  $author->update([
        'name' =>$request->name

    ]);

    if ($rs) {
        return redirect()->back()->with('success', "author Edit successfully");
      }


}


public function destroy($id){
$author= author::find($id)->delete();

if ($author) {
  return redirect()->back()->with('success', "author delete successfully");
}else{
  return redirect()->back()->with('error', "failde delete");

}
}



}
