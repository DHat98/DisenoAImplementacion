<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetaIngrediente extends Model
{
    use HasFactory;

    protected $table = 'receta_ingredientes';
    
    protected $fillable = [
        'receta_id',
        'ingrediente_id',
        'cantidad',
        'unidad_medida'
    ];

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }

    public function ingrediente()
    {
        return $this->belongsTo(Ingrediente::class);
    }
}