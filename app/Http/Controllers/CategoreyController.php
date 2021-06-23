<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoreyRequest;
use App\Model\categorey;
use Illuminate\Http\Request;

class CategoreyController extends Controller
{
  public  function index()
  {
     $categoreis= categorey::all();

     return view('pages.catogery.ShowCategorey',compact('categoreis'));
  }


  public function create()
  {

      return view('pages.catogery.StoreCategorey');

  }

    public function store(CategoreyRequest $request){

        $categorey = new categorey();
      $categorey->name =$request->name;

      if ($categorey->save()) {
        return redirect()->back()->with('success', "categorey saved successfully");
      }
    }

    public function edit($id)
    {
      $categorey=categorey::find($id);

      return view('pages.catogery.EditCategorey',compact('categorey'));

  }
  public function update($id,Request $request){

    $categorey=categorey::find($id);
  $rs=  $categorey->update([
        'name' =>$request->name

    ]);

    if ($rs) {
        return redirect()->back()->with('success', "categorey Edit successfully");
      }


}


    public function destroy($id){
      $categorey= categorey::find($id)->delete();

      if ($categorey) {
        return redirect()->back()->with('success', "categorey delete successfully");
      }else{
        return redirect()->back()->with('error', "failde delete");

      }
      }



}
