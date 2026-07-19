<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Prestamo;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';

    protected $fillable = [
        'nombre', 
        'codigo',
        'email',
    ];

    // RELACIÓN: Un Estudiante tiene muchos Préstamos
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
