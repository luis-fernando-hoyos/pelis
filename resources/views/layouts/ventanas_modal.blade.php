<script type="text/javascript">

jQuery(document).ready(function() {

	/**/
	jQuery("body").append('<div id="dialogo_mensajes"></div>');
	jQuery("body").append('<div id="dialogo_clientes"></div>');
	jQuery("body").append('<div id="dialogo_empleados"></div>');
	jQuery("body").append('<div id="dialogo_proveedores"></div>');
	jQuery("body").append('<div id="dialogo_ventanas_varias"></div>');

	jQuery("#dialogo_mensajes").dialog(
			{ 
				autoOpen: false 
				,title: "Mensajes del Sistema" 
				,modal: true
	 });

	jQuery("#dialogo_clientes").dialog(
			{ 
				autoOpen: false 
				,width: 800
				,height: 600
				,title: "Clientes" 
				,modal: true
	 });

	jQuery("#dialogo_empleados").dialog(
			{ 
				autoOpen: false 
				,width: 800
				,height: 600
				,title: "Empleados" 
				,modal: true
	 });

	jQuery("#dialogo_proveedores").dialog(
			{ 
				autoOpen: false 
				,width: 800
				,height: 600
				,title: "Proveedores" 
				,modal: true
	 });

	jQuery("#dialogo_ventanas_varias").dialog(
			{ 
				autoOpen: false 
				,width: 800
				,height: 600
				,title: " Opciones Varias" 
				,modal: true
	 });

	

	


});

</script>