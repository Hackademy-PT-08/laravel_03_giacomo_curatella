<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipesController extends Controller
{
    public $percorso = 'json/recipes.json';
    
    public function index(){
        $recipes = json_decode(file_get_contents($this->percorso), true);
        return view('home', ['ricette' => $recipes]);
    }

    public function show($id) {
        $recipes = json_decode(file_get_contents($this->percorso), true);

        foreach($recipes as $index){
            foreach($index as $recipe){
                if($id == $recipe['id']){
                    return view('dettaglio', ['ricetta' => $recipe]);
                }
            }
        }
    }

    public function filtered($difficulty){
        $recipes = json_decode(file_get_contents($this->percorso), true);
        $filteredRecipes = [];
        foreach($recipes as $index){
            foreach($index as $ricetta){
                if($difficulty == $ricetta['difficulty']){
                    array_push($filteredRecipes, $ricetta);
                }
            }
        }
        return view('filtro', ['ricette' => $filteredRecipes]);
    }
}
