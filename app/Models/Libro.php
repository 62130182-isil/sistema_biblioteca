<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Autor;
use App\Models\Prestamo;
use App\Models\Categoria;
class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $fillable = ['titulo','editorial','paginas','autor_id','categoria_id'];
    public function autor(){ return $this->belongsTo(Autor::class);}
    public function prestamos(){ return $this->hasMany(Prestamo::class);}
    public function categoria(){ return $this->belongsTo(Categoria::class);}
}
