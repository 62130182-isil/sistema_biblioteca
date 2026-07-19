<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Libro;

class Categoria extends Model
{
    use HasFactory;

protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}