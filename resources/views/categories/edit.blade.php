{{-- resources/views/categories/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Categoría</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT') {{-- Especifica el método HTTP PUT para la actualización --}}
                <div class="form-group">
                    <label for="name">Nombre de la categoría</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $category->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
                <a href="{{ route('categories.index') }}" class="btn btn-link">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
