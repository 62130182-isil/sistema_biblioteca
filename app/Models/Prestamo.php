<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model {
    use HasFactory;
    protected $table = 'prestamos';
    protected $fillable = ['libro_id', 'nombre_estudiante', 'fecha_prestamo', 'fecha_devolucion'];
    public function libro(){ return $this->belongsTo(Libro::class); }
    public function estudiante(){ return $this->belongsTo(Estudiante::class);}
}
