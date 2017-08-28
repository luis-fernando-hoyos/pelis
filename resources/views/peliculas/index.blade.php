@extends ('layouts.nav')

@section  ('content')
 <div><a href="{{ url('peliculas/create') }}" type="button" class="btn btn-raised btn-primary">Add Movie</a></div>
<br>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/2.jpg" alt="...">
      <div class="carousel-caption">
        <h3>blog de peliculas</h3>
        <p>hola mundo</p>
      </div>
    </div>
    <div class="item">
      <img src="img/3.jpg" alt="...">
      <div class="carousel-caption">
          <h3>blog de peliculas</h3>
        <p>hola mundo</p>
      </div>
    </div>
    <div class="item">
      <img src="img/4.jpg" alt="...">
      <div class="carousel-caption">
          <h3>blog de peliculas</h3>
        <p>hola mundo</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="pelis">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<h2>Example body text</h2>

<p>Nullam quis risus eget
  <a href="javascript:void(0)">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
</p>

<p>
  <small>This line of text is meant to be treated as fine print.</small>
</p>
<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>

<p>The following snippet of text is <em>rendered as italicized text</em>.</p>

<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
			</div>
			<div class="col-md-3">
			<h2>Example body text</h2>

<p>Nullam quis risus eget
  <a href="javascript:void(0)">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
</p>

<p>
  <small>This line of text is meant to be treated as fine print.</small>
</p>
<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>

<p>The following snippet of text is <em>rendered as italicized text</em>.</p>

<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
			</div>
			<div class="col-md-3">
			<h2>Example body text</h2>

<p>Nullam quis risus eget
  <a href="javascript:void(0)">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
</p>

<p>
  <small>This line of text is meant to be treated as fine print.</small>
</p>
<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>

<p>The following snippet of text is <em>rendered as italicized text</em>.</p>

<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
			</div>
			<div class="col-md-3">
			<h2>Example body text</h2>

<p>Nullam quis risus eget
  <a href="javascript:void(0)">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
</p>

<p>
  <small>This line of text is meant to be treated as fine print.</small>
</p>
<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>

<p>The following snippet of text is <em>rendered as italicized text</em>.</p>

<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.carousel').carousel({interval: 200})
</script>
@include ('layouts/footer')  
@endsection


