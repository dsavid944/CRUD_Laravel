<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Devuelve los posts de una categoría específica.
     */
    public function getPostsByCategory($categoryId)
    {
        $category = Category::with(['posts'])->findOrFail($categoryId);
        return response()->json([
            'categoryName' => $category->name,
            'posts' => $category->posts
        ]);
    }
}
