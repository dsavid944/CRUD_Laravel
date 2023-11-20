@extends('layouts.app')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <h1>Categorías</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Añadir Categoría</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Categoría</th>
                <th>Creación</th>
                <th>Actualización</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at->toDateString() }}</td>
                <td>{{ $category->updated_at->toDateString() }}</td>
                <td>
                    <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-primary">Actualizar</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
