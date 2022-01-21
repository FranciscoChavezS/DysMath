@extends('layouts.main', ['activePage' => 'juegos', 'titlePage' => __('¡Actividades para desarrollar!')])

@section('content')
<div class="content">
      	<div class="col-md-12">
			<div class="container-fluid">
            <link rel="stylesheet" href="css/material-dasboard.css">    
            <h1>JUEGO DE SUMA</h1>
                <div class="container1">
                    <div class="izquierdo1">
                        <div class="container-operacion">
                            <span id="suma">9 + 9 =</span>
                            <span class="resultado" id="resultado"> 18</span>
                        </div>
                        <br><span class="msj1" id="msj1"></span>
                    </div>
                    <div class="derecha1">
                        <span id="op1" class="opcion1" onclick="controlarRespuesta(this)">18</span>
                        <span id="op2" class="opcion1" onclick="controlarRespuesta(this)">17</span>
                        <span id="op3" class="opcion1" onclick="controlarRespuesta(this)">8</span>
                    </div>
                </div>
                <script src="css/script.js"></script>
    	</div>
  	</div>
</div>
@endsection