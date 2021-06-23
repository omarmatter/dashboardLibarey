<?php

namespace App\Http\Controllers;

use App\Model\author;
use App\Model\book;
use App\Model\categorey;
use App\Model\publish;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){

        $book= book::count();
        $author=author::count();
        $categorey=categorey::count();
        $publish=publish::count();

        return view('pages.dashboard',compact('book','author','categorey','publish'));

    }
}
