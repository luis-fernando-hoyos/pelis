@extends ('layouts.nav')

@section('content')
<div class="well">

    
    <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
      <thead>
        <tr>
            <th class="text-center">Codigo</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Año Estreno</th>
            <th class="text-center">Sipnosis</th>
            <th class="text-center">Idioma</th>
            <th class="text-center">Calidad</th>
            <th class="text-center">Director</th>
            <th class="text-center">Calificacion</th>
            <th class="text-center">Genero</th>
            <th class="text-center">Categoria</th>
            <th class="text-center">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($peliculas as $filas)
            <tr>
                <td class="text-center">{{ $filas->cod_pel }}</td>
                <td class="text-center">{{ $filas->nombre }}</td>
                <td class="text-center">{{ $filas->year_est }}</td>
                <td class="text-center">{{ $filas->sipnosis }}</td>
                <td class="text-center">{{ $filas->idioma }}</td>
                <td class="text-center">{{ $filas->calidad_cal }}</td>
                <td class="text-center">{{ $filas->director }}</td>
                <td class="text-center">{{ $filas->calificacion_clf }}</td>
                <td class="text-center">{{ $filas->genero_gen }}</td>
                <td class="text-center">{{ $filas->categoria_cat }}</td>
                 
                
                <td class="text-center">
                    <a href="{{ url('/peliculas/edit/') }}/<?php echo $filas->cod_pel; ?>" class="btn btn-labeled btn-success">
                        <span class="btn-label"><i class="fa fa-edit"></i></span>
                        Editar
                    </a>
                    <!--<a href="{{ url('/medida/pdf/') }}/<?php //echo $filas->med_codigo; ?>"  class="btn btn-labeled btn-default" target="_blank">
                        <span class="btn-label"><i class="fa fa-file-pdf-o"></i></span>
                        Imprimir
                    </a>-->
                </td>
            </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            
            <th class="text-center">Codigo</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Año Estreno</th>
            <th class="text-center">Sipnosis</th>
            <th class="text-center">Idioma</th>
            <th class="text-center">Calidad</th>
            <th class="text-center">Director</th>
            <th class="text-center">Calificacion</th>
            <th class="text-center">Genero</th>
            <th class="text-center">Categoria</th>
            <th class="text-center">Opciones</th>
        </tr>
      </tfoot>
    </table>
</div>
@stop
@endsection
@yield('content')
<script type="text/javascript">
   
jQuery(document).ready(function() {
    
    var responsiveHelper_dt_basic = undefined;
    var responsiveHelper_datatable_fixed_column = undefined;
    var responsiveHelper_datatable_col_reorder = undefined;
    var responsiveHelper_datatable_tabletools = undefined;
    
    var breakpointDefinition = {
        tablet : 1024,
        phone : 480
    };

    jQuery('#dt_basic').dataTable({
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
                "t"+
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "autoWidth" : true,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "preDrawCallback" : function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_dt_basic) {
                    responsiveHelper_dt_basic = new ResponsiveDatatablesHelper(jQuery('#dt_basic'), breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_dt_basic.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_dt_basic.respond();
            }
        });
    }); 

</script>