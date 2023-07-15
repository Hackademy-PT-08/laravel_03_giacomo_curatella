<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipesController extends Controller
{
    
    public function index(){
        $percorso = 'json/recipes.json';
        $recipes = json_decode(file_get_contents($percorso), true);
        return view('home', ['ricette' => $recipes]);
    }

    public function show($id) {
        $percorso = 'json/recipes.json';
        $recipes = json_decode(file_get_contents($percorso), true);

        foreach($recipes as $index){
            foreach($index as $recipe){
                if($id == $recipe['id']){
                    return view('dettaglio', ['ricetta' => $recipe]);
                }
            }
        }
    }
}
