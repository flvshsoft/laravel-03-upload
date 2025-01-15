<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Keranjang;

class MenuController extends Controller
{
   public function index()
    {
        $menus = Menu::all();
        $modelKeranjang = Keranjang::all();
        return view('menu.index', compact('menus', 'modelKeranjang'));
    }
}
