@extends('layouts.main', ['activePage' => 'juegos', 'titlePage' => __('¡Actividades para desarrollar!')])

@section('content')
<div class="content">
      	<div class="col-md-16">
			<div class="container-fluid">    
			<div class="row row-cols-1 row-cols-md-2 g-4" >
				<div class="col">
					<div class="card" style="width:20rem;" >
					<img src="{{ asset('img/perro1.png')}}" class="card-img-top" alt="..." height="29s0">
					<hr>
					<div class="card-body">
						<h5 class="card-title">SUMAS</h5>
						<p class="card-text">Actividad de aprendizaje de Suma</p>
					</div>
						<a href="{{ route('suma') }}"><button type="button"style="width: 20rem;" class="btn btn-success btn-lg">HACER ACTIVIDAD</button></a>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 20rem;">
					<img src="{{ asset('img/perro2.png')}}"  class="card-img-top" alt="..." height="290">
					<hr>
					<div class="card-body">
						<h5 class="card-title">Restas</h5>
						<p class="card-text">Actividad de Restas</p>
					</div>
						<button type="button" class="btn btn-success btn-lg" >HACER ACTIVIDAD</button>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 20rem;">
					<img src="{{ asset('img/perro3.png')}}" class="card-img-top" alt="...">
					<hr>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
						<a href="{{ route('suma') }}"><button type="button" class="btn btn-success btn-lg">HACER ACTIVIDAD</button></a>
					</div>
				</div>
				<div class="col">
					<div class="card"  style="width: 20rem;">
					<img src="{{ asset('img/gato3.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
						<a href="{{ route('suma') }}"><button type="button"style="width: 16rem;" class="btn btn-success btn-lg">HACER ACTIVIDAD</button></a>
					</div>
				</div>
			</div>
    	</div>
  	</div>
</div>
@endsection