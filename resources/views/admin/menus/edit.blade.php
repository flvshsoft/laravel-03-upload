@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Menu</h1>
    <form action="{{ route('menus.update', $menu) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $menu->name }}" required>
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" name="url" id="url" class="form-control" value="{{ $menu->url }}">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{ $menu->icon }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection