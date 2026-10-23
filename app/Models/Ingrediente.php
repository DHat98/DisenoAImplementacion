<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $table = 'ingredientes';
    
    
    protected $fillable = [
        'nombre'
    ];

    public function recetaIngredientes()
    {
        return $this->hasMany(RecetaIngrediente::class);
    }

    public function recetas()
    {
        return $this->belongsToMany(Receta::class, 'receta_ingredientes')
                    ->withPivot('cantidad', 'unidad_medida')
                    ->withTimestamps();
    }
}