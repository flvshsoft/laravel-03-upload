<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'nullable|string',
            // 'foto' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate the file
        ]);
        // dd($request);

        // Handle the uploaded file
        if ($request->hasFile('foto')) {
            // Store the file in the 'public/menus' directory
            $path = $request->file('foto')->store('menus', 'public');
        } else {
            $path = null; // If no file was uploaded, set the path to null
        }

        try {
            // Save the menu data
            $menu = new Menu();
            $menu->nama_menu = $request->nama_menu;
            $menu->harga = $request->harga;
            $menu->foto = $path; // Store the file path in the database
            $menu->save();
            return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('menus.index')->with('success', 'Menu gagal.');
            return redirect()->back()->with('error', 'Failed to create menu. Please try again.');
        }
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'nullable|string',
            'foto' => 'nullable|string',
        ]);

        $menu->update($request->all());
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
