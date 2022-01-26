@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Acividades para ti')])

@section('content')
<div class="content">
      <div class="col-md-12">
      <div class="container-fluid">
         <!-- Mostrar mensaje en post-->
      @if (session('successPlaylist'))
                    <div class="alert alert-success" role="success">
                      {{ session('successPlaylist') }}
                    </div>
            @endif
        <div class="row">
    @foreach($posts as $post)
          <div class="col-md-4 col-12 justify-content-center mb-5">
            <div class="card m-auto" style="width: 18rem;">
                <img src="{{ asset($post->foto)}}" class="card-img-top" alt="">
                <div class="card-body">
                  <small class="card-txt-category">Fecha: {{ $post->fecha }}</small>
                  <h3 class="card-title my-2">{{ $post->title }}</h3>
                  <h5 class="card-title my-2">Descripcion: {{ $post->descripcion }}</h5>
                  <hr>
                  <div class="d-card-text">
                </div>
                  <div class="row">
                    <div class="col-6 text-right">
                      <div class="card-footer ml-auto mr-auto">
                        <a href="{{ $post->tema }}" class="post-link"><button type="submit" class="btn btn-success btn-lg" style="width: 15rem;">Hacer Actividad</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      @endforeach
        </div>
    </div>
  </div>
</div>
@endsection
