<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animales extends Controller
{
    public function getAnimales(){
        $animales = ['Takeli','Leon','Gacela','Hiena','Simba'];
        return response()->json(['mensaje' => 'Estos son mis animales','datos' => $animales]);
    }
}
