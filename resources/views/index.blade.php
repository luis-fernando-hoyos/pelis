 @extends ('layouts/nav')
 
@section  ('content')

 <div class="container">
    <div class="pull-right">
      <button type="" style="background: #3097D1 ; " class="btn btn-succes"><a href="{{ route('peliculas.create') }}">
      <span style="color:white;">Add Movie</span></a></button>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
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
  
 <div class="col-md-4">
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
    <div class="col-md-4">
    <img  style="height: 305px; width: 300px; padding-top: 30px;" src="img/2.jpg">
    </div>
  </div>
</div>
<br><br>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/5.jpg" style="height: 500px; width: 100%;" alt="...">
      <div class="carousel-caption">
        <h4>PELICULAS WORD </h4>
      </div>
    </div>
    <div class="item">
      <img src="img/6.jpg" style="height: 500px; width: 100%;" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="img/7.jpg" style="height: 500px; width: 100%;" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@include('layouts.footer')
@endsection
  
