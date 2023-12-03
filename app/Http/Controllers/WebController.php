<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class WebController extends Controller
{
/**
 * Mostrar una lista de todas las publicaciones.
 */
public function index()
{
    $posts = Post::all(); // Obtiene todos los posts
    return view('posts.index', compact('posts'));
}

/**
 * Muestra la información detallada de una publicación específica.
 */
public function detail($id)
{
    $post = Post::findOrFail($id); // Encuentra el post o arroja un error 404 si no existe
    return view('posts.detail', compact('post'));
}

/**
 * Muestra todos los posts de una categoría específica.
 */
public function post_category($category_id)
{
    $category = Category::with('posts')->findOrFail($category_id); // Encuentra la categoría y sus posts relacionados
    return view('categories.posts', compact('category'));
}
/**
 * Lógica del formulario de contacto.
 */
public function contact(Request $request)
{
    // Validación del formulario
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Aquí podrías enviar un correo electrónico o realizar otra acción con los datos del formulario
    // ...

    return redirect()->route('contact.form')->with('success', 'Mensaje enviado con éxito.');
}

}
