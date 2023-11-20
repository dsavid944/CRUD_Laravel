{{-- resources/views/categories/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Nueva Categoría</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre de la categoría</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Guardar Categoría</button>
                <a href="{{ route('categories.index') }}" class="btn btn-link">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
