@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Tablero de clase')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people</i>
                  </div>
                  <p class="card-category">Usuarios</p>
                  <h3 class="card-title">{{ \App\Models\User::all()->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">sports_esports</i>
                  </div>
                  <p class="card-category">Actividades</p>
                  <h3 class="card-title"> {{ \App\Models\Post::all()->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            @can('roles.index')
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment_ind</i>
                  </div>
                  <p class="card-category">Roles</p>
                  <h3 class="card-title">{{ Spatie\Permission\Models\Role::all()->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div> 
            @endcan
          </div>
          </div>
        </div>
    </div>
</div>
@endsection