<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

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
        // dd($request);
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'nullable|string',
            'foto' => 'nullable|string',
        ]);

        try {
            Menu::create($request->all());
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
