<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeranjangController extends Controller
{
    public function index()
    {
        $model = Keranjang::with('menu')->get();
        return view('keranjang.index', compact('model'));
    }

    public function store($id_menu)
    {
        try {
            $modelMenu = Menu::find($id_menu);
            if ($modelMenu) {
                // dd($modelMenu['harga']);
                // Save the menu data
                $modelKeranjang = new Keranjang();
                $modelKeranjang->id_menu = $id_menu;
                $modelKeranjang->qty = '1'; // Store the file path in the database
                $modelKeranjang->harga = $modelMenu['harga'];
                $modelKeranjang->save();
                return redirect()->route('menu')->with('success', 'Menu created successfully.');
            } else {
                // Menu tidak ditemukan
                dd('Menu tidak ditemukan');
            }
        } catch (\Exception $e) {
            dd('error '.$e);
            // return redirect()->route('menus.index')->with('success', 'Menu gagal.');
            return redirect()->back()->with('error', 'Failed to create menu. Please try again.');
        }
    }


    public function keranjang_tambah($id)
    {
        try {
            $modelKeranjang = Keranjang::find($id);
            if ($modelKeranjang) { 
                $modelKeranjang->qty = $modelKeranjang->qty + 1; // Store the file path in the database
                $modelKeranjang->save();
                return redirect()->route('keranjang.index')->with('success', 'Menu created successfully.');
            } else {
                // Menu tidak ditemukan
                dd('Keranjang tidak ditemukan');
            }
        } catch (\Exception $e) {
            dd('error ' . $e);
            // return redirect()->route('menus.index')->with('success', 'Menu gagal.');
            return redirect()->back()->with('error', 'Failed to create menu. Please try again.');
        }
    }


    public function keranjang_kurang($id)
    {
        try {
            $modelKeranjang = Keranjang::find($id);
            if ($modelKeranjang) {
                if($modelKeranjang->qty <= 1){
                    $modelKeranjang->delete();
                }else{
                    $modelKeranjang->qty = $modelKeranjang->qty - 1; // Store the file path in the database
                    $modelKeranjang->save();
                }
                return redirect()->route('keranjang.index')->with('success', 'Menu created successfully.');
            } else {
                // Menu tidak ditemukan
                dd('Keranjang tidak ditemukan');
            }
        } catch (\Exception $e) {
            dd('error ' . $e);
            // return redirect()->route('menus.index')->with('success', 'Menu gagal.');
            return redirect()->back()->with('error', 'Failed to create menu. Please try again.');
        }
    }
}
