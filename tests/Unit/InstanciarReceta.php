<?php

use App\Models\Receta;

test('se puede instanciar una receta y asignar sus atributos', function () {

    $receta = new Receta();

    $receta->titulo = 'Pastel de Chocolate';
    $receta->porciones = 8;
    $receta->instrucciones = 'Mezclar los ingredientes y hornear por 45 minutos.';

    
    expect($receta)->toBeInstanceOf(Receta::class)
        ->and($receta->titulo)->toBe('Pastel de Chocolate')
        ->and($receta->porciones)->toBe(8)
        ->and($receta->instrucciones)->toBe('Mezclar los ingredientes y hornear por 45 minutos.');
});
