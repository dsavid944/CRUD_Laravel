<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    /**
     * Mostrar una lista de las categorías.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }



    /**
     * Mostrar el formulario para crear una nueva categoría.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Almacenar una categoría recién creada.
     */
    public function store(StoreCategory $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Muestra la categoría especificada.
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Muestra el formulario para editar la categoría especificada.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Actualice la categoría especificada en el almacenamiento.
     */
    public function update(StoreCategory $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Elimina la categoría especificada del almacenamiento.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
