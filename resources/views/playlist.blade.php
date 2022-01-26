@extends('layouts.main', ['activePage' => 'playlist', 'titlePage' => __('Calificaciones!')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <!-- Mostrar mensaje en post-->
      <div class="card">
          <div class="card-header card-header-danger">
            <h4 class="card-title">Calificación</h4>
            <p class="card-category">Notas </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> Título </th>
                  <th> Foto </th>
                  <th> Fecha </th>
                  <th> Descripción</th>
                  <th> Tema </th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($posts as $post)
                  <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                      <img src="{{ asset($post->foto)}}" class="img-fluid img-thumbnail" width="120">
                    </td>
                    <td>{{ $post->fecha }}</td>
                    <td>{{ $post->descripcion }}</td>
                    <td>{{ $post->tema }}</td>

                    <td class="td-actions text-right">
                      <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                        onsubmit="return confirm('¿Estas seguro de eliminar la canción?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $posts->links() }}
          </div>
          <!--End footer-->
        </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
