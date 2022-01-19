@extends('layouts.main', ['activePage' => 'juegos', 'titlePage' => __('¡Actividades para desarrollar!')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
		<div class="card-header card-header-danger">
            <h4 class="card-title">ACTIVIDAD</h4>
            <p class="card-category">SUMAS</p>
			<div class="container1">
				<div class="izquierdo1">
					<div class="container-operacion">
						<span id="suma">9 + 9 =</span>
						<span class="resultado" id="resultado"> 18</span>
					</div>
					<span class="msj1" id="msj1">
							
					</span>
				</div>
				<div class="derecha1">
					<span id="op1" class="opcion1" onclick="controlarRespuesta(this)">18</span>
					<span id="op2" class="opcion1" onclick="controlarRespuesta(this)">17</span>
					<span id="op3" class="opcion1" onclick="controlarRespuesta(this)">8</span>
					
				</div>
				
			</div>
          </div>
			
	<script>
		var num1, num2, respuesta;
		txt_suma = document.getElementById("suma");
		op1 = document.getElementById("op1");
		op2 = document.getElementById("op2");
		op3 = document.getElementById("op3");
		txt_msj = document.getElementById("msj1");

		
		txt_resultado = document.getElementById("resultado");

		function comenzar(){
			txt_resultado.innerHTML = "?";
			txt_msj.innerHTML = "";

			//genera la suma - Numeros aleatorios entre 0 1 9
			num1 = Math.round(Math.random()*9);
			num2 = Math.round(Math.random()*9);
			respuesta = num1 + num2;
			//asignamos lo números para que se muestren
			suma.innerHTML = num1 + " + " + num2 + " = ";

			//genero un número entre 0 y 2 para colocar la opcion correcta
			indiceOpCorrecta = Math.round(Math.random()*2);
			console.log(indiceOpCorrecta);

			//si indiceCorrrecta es igual 0
			if(indiceOpCorrecta == 0){
				op1.innerHTML = respuesta;
				op2.innerHTML = respuesta + 1;
				op3.innerHTML = respuesta - 1
			}
			if(indiceOpCorrecta == 1){
				op1.innerHTML = respuesta-1;
				op2.innerHTML = respuesta;
				op3.innerHTML = respuesta - 2;
			}
			if(indiceOpCorrecta == 2){
				op1.innerHTML = respuesta+ 2;
				op2.innerHTML = respuesta + 3;
				op3.innerHTML = respuesta;
			}
		}

		function controlarRespuesta(opcionElegida){	

			txt_resultado.innerHTML = opcionElegida.innerHTML;
			if(respuesta == opcionElegida.innerHTML){
				
				txt_msj.innerHTML = "CORRECTO";
				txt_msj.style.color="green";
				setTimeout(comenzar, 2000);
			}else{
				txt_msj.innerHTML = "ERROR";
				txt_msj.style.color="red";
				setTimeout(limpiar, 2000);

			}
		}
		function limpiar(){
			txt_resultado.innerHTML = "?";
			txt_msj.innerHTML = "";
		}

			comenzar();
		</script>
        </div>
    </div>
</div>
@endsection