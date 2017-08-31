@extends('layouts.smartadmin') 

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
						
						<form method="POST" id="fx" action="{{ url('banco/update') }}" class="smart-form">

							<header>
								Modificar Peliculas
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
                        @foreach($yearestreno as $filas)
                        <option value="{{ $filas->year_a }}">{{ $filas->year_a }}</option>
                        @endforeach
                      </select>
                      @foreach ($errors->get('year_est') as $message) 
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

            <div class="row">
                    <section class="col-md-10">
                      <label for="inputEmail" class="col-md-2 control-label">Idioma</label>
                      <select  id="idioma" name="idioma" class="form-control">
                        <option value="-1">Seleccione..</option>
                        @foreach($idiomas as $filas)
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
                    <section class="col-md-10">
                      <label for="inputEmail" class="col-md-2 control-label">Calidad</label>
                      <select  id="calidad_cal" name="calidad_cal" class="form-control">
                        <option value="-1">Seleccione..</option>
                        @foreach($calidad as $filas)
                        <option value="{{ $filas->tipo_cal }}">{{ $filas->tipo_cal }}</option>
                        @endforeach
                      </select>
                      @foreach ($errors->get('calidad_cal') as $message) 
                          <div class="note note-error">{{ $message }}</div>
                      @endforeach
                    </section>
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
                        <select  id="calificacion_clf" name="calificacion_clf" class="form-control">
                          <option value="-1">Seleccione..</option>
                           @foreach($calificacion as $filas)
                          <option value="{{ $filas->tipo_clf }}">{{ $filas->tipo_clf }}</option>
                         @endforeach
                       </select>
                    @foreach ($errors->get('calificacion_clf') as $message) 
                  <div class="note note-error">{{ $message }}</div>
                @endforeach
             </section>
           </div>
        </div>


<br><br>

                 <div class="row">
                    <section class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Genero</label>
                       <select  id="genero_gen" name="genero_gen" class="form-control">
                         <option value="-1">Seleccione..</option>
                          @foreach($genero as $filas)
                          <option value="{{ $filas->tipo_gen }}">{{ $filas->tipo_gen }}</option>
                         @endforeach
                       </select>
                     @foreach ($errors->get('genero_gen') as $message) 
                 <div class="note note-error">{{ $message }}</div>
               @endforeach
            </section>
          </div>
       </div>

 
                  <div class="row">
                    <section class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Categorias</label>
                       <select  id="categoria_cat" name="categoria_cat" class="form-control">
                        <option value="-1">Seleccione..</option>
                         @foreach($categorias as $filas)
                        <option value="{{ $filas->tipo_cat }}">{{ $filas->tipo_cat }}</option>
                       @endforeach
                     </select>
                  @foreach ($errors->get('categorias_cat') as $message) 
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
									Modificar
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
			
			<script type="text/javascript">
				jQuery(document).ready(function(){
					
					jQuery('#cod_pel').val('<?php echo $peliculas->cod_pel;?>');
					jQuery('#nombre').val('<?php echo $peliculas->nombre;?>');
					jQuery('#year_est').val('<?php echo $peliculas->year_est;?>');
					jQuery('#sipnosis').val('<?php echo $peliculas->sipnosis;?>');
					jQuery('#idioma').val('<?php echo $peliculas->idioma;?>');
					jQuery('#calidad_cal').val('<?php echo $peliculas->calidad_cal;?>');
					jQuery('#director').val('<?php echo $peliculas->director;?>');
					jQuery('#calificacion_clf').val('<?php echo $peliculas->calificacion_clf;?>');
					jQuery('#categoria_cat').val('<?php echo $peliculas->categoria_cat;?>');

					


				});
			</script>

@stop
