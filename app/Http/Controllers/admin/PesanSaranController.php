<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PesanSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesanSaranController extends Controller
{
    public function index()
    {
        $menus = PesanSaran::all();
        return view('admin.pesan_saran.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.pesan_saran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|string',
            'pesan' => 'nullable|string',
        ]);
        // dd($request);
        try {
            // Save the menu data
            $model = new PesanSaran();
            $model->nama = $request->nama;
            $model->email = $request->email;
            $model->pesan = $request->pesan;
            $model->save();
            return redirect()->route('pesan-saran.index')->with('success', 'Menu created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('pesan-saran.index')->with('success', 'Menu gagal.');
            return redirect()->back()->with('error', 'Failed to create menu. Please try again.');
        }
    }

    public function edit(Menu $menu)
    {
        return view('admin.pesan_saran.edit', compact('menu'));
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

    public function store_user(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|string',
            'pesan' => 'nullable|string',
        ]);
        // dd($request);
        try {
            // Save the menu data
            $model = new PesanSaran();
            $model->nama = $request->nama;
            $model->email = $request->email;
            $model->pesan = $request->pesan;
            $model->save();
            return redirect()->route('home')->with('success', 'Pesan Saran created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('success', 'Menu gagal.');
            return redirect()->back()->with('error', 'Failed to create menu. Please try again.');
        }
    }
}
