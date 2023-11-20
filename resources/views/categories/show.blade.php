{{-- resources/views/categories/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Categoría</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text">{{ $category->description }}</p>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
