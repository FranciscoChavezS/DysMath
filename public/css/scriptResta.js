		var resta1, resta2, respuesta1;
		txt_resta = document.getElementById("resta");
		opc1 = document.getElementById("opc1");
		opc2 = document.getElementById("opc2");
		opc3 = document.getElementById("opc3");
		txt_msj = document.getElementById("msj2");

		
		txt_resultado1 = document.getElementById("resultado1");

		function comenzar(){
			txt_resultado1.innerHTML = "?";
			txt_msj.innerHTML = "";

			//genera la resta - Numeros aleatorios entre 0 1 9
			resta1 = Math.round(Math.random()*9);
			resta2 = Math.round(Math.random()*9);
			respuesta1 = resta1 - resta2;
			//asignamos lo números para que se muestren
			resta.innerHTML = resta1 + " - " + resta2 + " = ";

			//genero un número entre 0 y 2 para colocar la opcion correcta
			indiceOpCorrecta = Math.round(Math.random()*2);
			console.log(indiceOpCorrecta);

			//si indiceCorrrecta es igual 0
			if(indiceOpCorrecta == 0){
				opc1.innerHTML = respuesta1;
				opc2.innerHTML = respuesta1 + 1;
				opc3.innerHTML = respuesta1 - 1
			}
			if(indiceOpCorrecta == 1){
				opc1.innerHTML = respuesta1-1;
				opc2.innerHTML = respuesta1;
				opc3.innerHTML = respuesta1 - 2;
			}
			if(indiceOpCorrecta == 2){
				opc1.innerHTML = respuesta1+ 2;
				opc2.innerHTML = respuesta1 + 3;
				opc3.innerHTML = respuesta1;
			}
		}

		function controlarRespuesta1(opcionElegida){	

			txt_resultado1.innerHTML = opcionElegida.innerHTML;
			if(respuesta1 == opcionElegida.innerHTML){
				
				txt_msj.innerHTML = "CORRECTO";
				txt_msj.style.color="green";
				setTimeout(comenzar, 2000);
			}else{
				txt_msj.innerHTML = "INCORRECTO";
				txt_msj.style.color="red";
				setTimeout(limpiar, 2000);

			}
		}
		function limpiar(){
			txt_resultado1.innerHTML = "?";
			txt_msj.innerHTML = "";
		}

			comenzar();
			
			<h3 class="card-title my-2">Actividad</h3>
						<h5 class="card-title my-2">Restas</h5>
						<hr>
							<div class="d-card-text">
								<div class="container2">
									<div class="izquierdo2">
										<div class="container-operacion">
										<span id="resta">9 - 5 =</span>
										<span class="resultado1" id="resultado1"> 3</span>
									</div>
								<br><span class="msj2" id="msj2"></span>
							</div>
							<div class="derecha2">
								<span id="opc1" class="opcion2" onclick="controlarRespuesta1(this)">18</span>
								<span id="opc2" class="opcion2" onclick="controlarRespuesta1(this)">17</span>
								<span id="opc3" class="opcion2" onclick="controlarRespuesta1(this)">8</span>					
							</div>
						</div>
					</div>
						<script src="css/scriptResta.js"></script>