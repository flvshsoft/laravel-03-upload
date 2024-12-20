@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Menu</h1>
    <form action="{{ route('menus.update', $menu) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_menu" class="form-label">Nama Menu</label>
            <input type="text" name="nama_menu" id="nama_menu" class="form-control" value="{{ $menu->nama_menu }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="{{ $menu->harga }}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Icon</label>
            <input type="text" name="foto" id="foto" class="form-control" value="{{ $menu->foto }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection