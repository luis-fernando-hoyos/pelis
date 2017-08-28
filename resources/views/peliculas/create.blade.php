@extends('layouts.nav') 

@section('content')
<!-- widget grid -->
<section id="widget-grid" class="">
  <!-- START ROW -->
  <div class="row">

    <!-- NEW COL START -->
    <article class="col-sm-12 col-md-12 col-lg-6">
      
      <!-- Widget ID (each widget will need unique ID)-->
      <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
        <!-- widget options:
          usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
          
          data-widget-colorbutton="false" 
          data-widget-editbutton="false"
          data-widget-togglebutton="false"
          data-widget-deletebutton="false"
          data-widget-fullscreenbutton="false"
          data-widget-custombutton="false"
          data-widget-collapsed="true" 
          data-widget-sortable="false"
          
        -->
        <header>
          <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
          <h2>Banco</h2>        
          
        </header>

        <!-- widget div-->
        <div>
          
          <!-- widget edit box -->
          <div class="jarviswidget-editbox">
            <!-- This area used as dropdown edit box -->
            
          </div>
          <!-- end widget edit box -->
          
          <!-- widget content -->
          <div class="widget-body no-padding">
            
            <form method="POST" id="fx" action="{{ url('peliculas/store') }}" class="smart-form">

              <header>
                Agregar Banco
                </header>

                {{ method_field('POST') }}
                {{ csrf_field() }}

                <fieldset>
                  <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Nombre pelicula</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
      </div>
    </div>
  <br><br>

              <div class="row">
                    <section class="col-md-10">
                      <label for="inputEmail" class="col-md-2 control-label">Año Estreno</label>
                      <select  id="year_est" name="year_est" class="form-control">
                        <option value="-1">Seleccione..</option>
                        @foreach($pelicula as $filas)
                        <option value="{{ $filas->year_a }}">{{ $filas->year_a }}</option>
                        @endforeach
                      </select>
                      @foreach ($errors->get('peliculas') as $message) 
                          <div class="note note-error">{{ $message }}</div>
                      @endforeach
                    </section>
                  </div>


        <br><br>
          <div class="form-group">
             <label for="inputFile" class="col-md-2 control-label">File</label>
               <div class="col-md-10">
              <input type="text" readonly="" class="form-control" placeholder="Browse...">
            <input type="file" id="inputFile" multiple="">
          </div>
    </div>
 
<br><br>

        <div class="form-group">
          <label for="inputSipnosis" class="col-md-2 control-label">Sipnosis</label>
            <div class="col-md-10">
            <input type="text" class="form-control" name="sipnosis"  placeholder="Sipnosis">
           </div>
        </div> 

<br><br>

             <div class="form-group">
                    <section class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Idioma</label>
                       <select  id="tipo_idi" name="tipo_idi" class="form-control">
                        <option value="-1">Seleccione..</option>
                         @foreach($idioma as $filas)
                        <option value="{{ $filas->tipo_idi }}">{{ $filas->tipo_idi }}</option>
                       @endforeach
                      </select>
                    @foreach ($errors->get('idioma') as $message) 
                <div class="note note-error">{{ $message }}</div>
              @endforeach
            </section>
          </div>

<br><br>

                 <div class="row">
                    <section class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Calidad</label>
                       <select  id="tipo_cal" name="tipo_cal" class="form-control">
                        <option value="-1">Seleccione..</option>
                         @foreach($calidad as $filas)
                         <option value="{{ $filas->tipo_cal }}">{{ $filas->tipo_cal }}</option>
                        @endforeach
                      </select>
                     @foreach ($errors->get('calidad') as $message) 
                  <div class="note note-error">{{ $message }}</div>
                @endforeach
             </section>
          </div>
        </div>


  <br><br>

       <div class="form-group">
           <label for="inputDirector" class="col-md-2 control-label">Director</label>
             <div class="col-md-10">
            <input type="" class="form-control" name="director"  placeholder="Director">
           </div>
        </div>

<br><br>

                 <div class="row">
                    <section class="form-group">
                       <label for="inputEmail" class="col-md-2 control-label">Calificacion</label>
                        <select  id="tipo_clf" name="tipo_clf" class="form-control">
                          <option value="-1">Seleccione..</option>
                           @foreach($calificacion as $filas)
                          <option value="{{ $filas->tipo_clf }}">{{ $filas->tipo_clf }}</option>
                         @endforeach
                       </select>
                    @foreach ($errors->get('calificacion') as $message) 
                  <div class="note note-error">{{ $message }}</div>
                @endforeach
             </section>
           </div>
        </div>


<br><br>

                 <div class="row">
                    <section class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Genero</label>
                       <select  id="tipo_gen" name="tipo_gen" class="form-control">
                         <option value="-1">Seleccione..</option>
                          @foreach($genero as $filas)
                          <option value="{{ $filas->tipo_gen }}">{{ $filas->tipo_gen }}</option>
                         @endforeach
                       </select>
                     @foreach ($errors->get('genero') as $message) 
                 <div class="note note-error">{{ $message }}</div>
               @endforeach
            </section>
          </div>
       </div>

 
                  <div class="row">
                    <section class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Categorias</label>
                       <select  id="tipo_cat" name="tipo_cat" class="form-control">
                        <option value="-1">Seleccione..</option>
                         @foreach($categorias as $filas)
                        <option value="{{ $filas->tipo_cat }}">{{ $filas->tipo_cat }}</option>
                       @endforeach
                     </select>
                  @foreach ($errors->get('categorias') as $message) 
                <div class="note note-error">{{ $message }}</div>
               @endforeach
             </section>
           </div>
         </div>

 </fieldset>
                
                
                @if ($errors->any())
                  @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                @endif


                <footer>
                <button type="submit" class="btn btn-success">
                  Guardar
                </button>
                <button type="button" class="btn btn-default" onclick="window.history.back();">
                  Cancelar
                </button>
                </footer>

            </form>

          </div>
          <!-- end widget content -->
          
        </div>
        <!-- end widget div -->
        
      </div>
      <!-- end widget -->
      <div id="mensajes_log"></div>


@stop