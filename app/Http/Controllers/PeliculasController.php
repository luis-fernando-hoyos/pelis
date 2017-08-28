<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;
use App\Models\AñoEstreno;
use App\Models\Idiomas;
use App\Models\Categoria;
use App\Models\Calidad;
use App\Models\Calificacion;
use App\Models\Genero;
class PeliculasController extends Controller
{
    
    public function index()
    {
        return view("peliculas.index");
     
    }

    public function create()
    {
        $pelicula= AñoEstreno::get();
        $idioma = Idiomas::get();
        $categorias = Categoria::get();
        $calidad = Calidad::get();
        $calificacion = Calificacion::get();
        $genero = Genero::get();


        return view("peliculas.create",compact('pelicula','idioma','categorias','calidad','calificacion','genero'));
    }

      public function store(Request $request)
    {
        
            $peliculas = new Peliculas;
            $peliculas->nombre        = $request->input('nombre');
            $peliculas->year_a        = $request->input('year_a');
            $peliculas->sipnosis        = $request->input('sipnosis');
            $peliculas->idioma        = $request->input('idioma');
            $peliculas->calidad_cal        = $request->input('calidad_cal');
            $peliculas->director        = $request->input('director');
            $peliculas->calificacion_clf        = $request->input('calificacion_clf');
            $peliculas->genero_gen        = $request->input('genero_gen');
            $peliculas->categoria_cat        = $request->input('categoria_cat');


           return view("peliculas.index");
 
    }

    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
