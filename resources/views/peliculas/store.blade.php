@extends('layouts.nav') 

@section('content')

<?php echo "<div class='well'>$peliculas_id</div>" ?>

<script type="text/javascript">
	jQuery(document).ready(function() {
		// With Callback
	//$("#smart-mod-eg1").click(function(e) {
		jQuery.SmartMessageBox({
			title : "Tipo de Regimen Agregado Satisfactoriamente",
			content : "Por favor Selecciona una de estas opciones",
			buttons : '[Agregar Nuevo][Modificar][Cancelar]'
		}, function(ButtonPressed) {
			if (ButtonPressed === "Agregar Nuevo") {

				url="{{ url('peliculas/create') }}";
				jQuery(location).attr('href',url); 
			}

			if (ButtonPressed === "Modificar") {
				url="{{ url('peliculas/edit') }}/<?php echo $peliculas_id ?>";
				jQuery(location).attr('href',url); 
			}

			

			if (ButtonPressed === "Cancelar") {
				url="{{ url('peliculas/index') }}";
				jQuery(location).attr('href',url); 
			}

		});
	});
	//e.preventDefault();
//})

</script>

@stop