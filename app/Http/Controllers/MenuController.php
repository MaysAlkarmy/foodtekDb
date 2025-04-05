<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
      $menu = Menu::all();
     // dd($menu);
       return view('test',compact('menu'));
    }

    public function show(){

        $menu= Menu::where('main_category', '=', 'Apple')->get();
        return view('show',compact('menu'));
    
    }
    public function topRated(){

        $menu= Menu::where('rating', '>', '3.5')->get();
        return view('show',compact('menu'));
    
    }
}
