<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Define los campos asignables masivamente
    protected $fillable = [
        'title', 'content', 'category_id'
    ];

    /**
     * Obtiene la categoría a la que pertenece el post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
