@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Menu List</h1>
    <a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">Create New Menu</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->nama_menu }}</td>
                <td>{{ $menu->harga }}</td>
                <td>{{ $menu->foto }}</td>
                <td>
                    <a href="{{ route('menus.edit', $menu) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('menus.destroy', $menu) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection