<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $table = 'recetas';
    
    protected $fillable = [
        'titulo', 
        'porciones', 
        'instrucciones'
    ];

    public function recetaIngredientes()
    {
        return $this->hasMany(RecetaIngrediente::class);
    }

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'receta_ingredientes')
                    ->withPivot('cantidad', 'unidad_medida')
                    ->withTimestamps();
    }
}