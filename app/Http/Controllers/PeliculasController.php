<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;
use App\Models\YearEstreno;
class PeliculasController extends Controller
{
    
    public function index()
    {
        return view("peliculas.index");
     
    }

    public function create()
    {
       
        return view("peliculas.create");
    }

      public function store(Request $request)
    {
 
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
