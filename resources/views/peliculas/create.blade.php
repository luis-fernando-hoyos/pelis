@extends('layouts.nav') 

@section('content')
        
  <header>
     <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
      <h2 class="text-center">Agregar Peliculas</h2><br>       
  </header>
<div class="container">
  <form method="POST" id="fx" action="{{ url('peliculas/store') }}" class="smart-form">
                {{ method_field('POST') }}
                {{ csrf_field() }}
  <fieldset>
    <div class="row">
        <div class="col-md-6 mb-3">
         <label for="validationServer01">First name</label>
          <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
      </div>

      <div class="col-md-6 mb-3">
        <label for="validationServer02">Last name</label>
        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
      </div>
    </div>

    <div class="row">
     <div class="col-md-6 mb-3">
      <label for="validationServer03">City</label>
      <input type="text" class="form-control is-valid" id="validationServer03" placeholder="City" required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationServer04">State</label>
      <input type="text" class="form-control is-valid" id="validationServer04" placeholder="State" required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationServer05">Zip</label>
      <input type="text" class="form-control is-valid" id="validationServer05" placeholder="Zip" required>
    </div>
  </div>
</fieldset>
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
@stop