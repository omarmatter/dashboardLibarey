<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublishRequest;
use App\Model\publish;
use Illuminate\Http\Request;

class PublishController extends Controller
{

    public  function index()
{
   $publishs= publish::all();

   return view('pages.publish.ShowPublish',compact('publishs'));
}

public function create()
{

    return view('pages.publish.StorePublish');

}


    public function store(PublishRequest $request){

 $publish = new publish();
  $publish->name =$request->name;


  if ($publish->save()) {
    return redirect()->back()->with('success', "publish saved successfully");
}

    }
    public function edit($id)
    {
      $publish=publish::find($id);

      return view('pages.publish.EditPublish',compact('publish'));

  }
  public function update($id,Request $request){

    $publish=publish::find($id);
  $rs=  $publish->update([
        'name' =>$request->name

    ]);

    if ($rs) {
        return redirect()->back()->with('success', "publish Edit successfully");
      }


}


    public function destroy($id){
        $publish= publish::find($id)->delete();

        if ($publish) {
          return redirect()->back()->with('success', "publish delete successfully");
        }else{
          return redirect()->back()->with('error', "failde delete");

        }
        }


}
