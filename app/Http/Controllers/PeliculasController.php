<?php

namespace App\Http\Controllers;
use Validator;

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
    {   $peliculas = Peliculas::get();
        return view("peliculas.index",compact('peliculas'));
     
    }

    public function create()
    {
    
        $yearestreno = AñoEstreno::get();
        $idiomas = Idiomas::get();
        $categorias = Categoria::get();
        $calidad = Calidad::get();
        $calificacion = Calificacion::get();
        $genero = Genero::get();


        return view("peliculas.create",compact('yearestreno','idiomas','categorias','calidad','calificacion','genero'));
    }

      public function store(Request $request)
    {
       
        $peliculas = new Peliculas;


            $peliculas ->cod_pel = $request->cod_pel;
            $peliculas->nombre   = $request->nombre;
            $peliculas->year_est =$request->year_est;
            $peliculas->sipnosis = $request->sipnosis;
            $peliculas->idioma   = $request->idioma;
            $peliculas->calidad_cal = $request->calidad_cal;
            $peliculas->director    = $request->director;
            $peliculas->calificacion_clf        = $request->calificacion_clf;
            $peliculas->genero_gen        = $request->genero_gen;
            $peliculas->categoria_cat     = $request->categoria_cat;

            
            $peliculas->save();

           return redirect()->route("peliculas.index");
 
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
