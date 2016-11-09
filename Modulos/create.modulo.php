<?php 

$value = "a";
if (isset($_GET["btn"])) {
	$value = $_GET["btn"];
}



?>

  <div class="row">
  	<div class="col s7">
  		  <form action="#">
		    <p>
		      <input name="group1" value="a" type="radio" id="test1" <?php if ($value === "a") { echo "checked"; }?> />
		      <label class="white-text shadow" for="test1">Seleccion Multiple</label>
		    </p>
		    <p>
		      <input name="group1" value="b" type="radio" id="test2" <?php if ($value === "b") { echo "checked"; }?> />
		      <label class="white-text shadow" for="test2">Completacion</label>
		    </p>
		    <p>
		      <input class="" name="group1" value="c" type="radio" id="test3" <?php if ($value === "c") { echo "checked"; }?> />
		      <label class="white-text shadow" for="test3">Verdadero o Falso</label>
		    </p>

		  </form>
  	</div>
  	<div class="col s5">
		<h3 class="borf"># Preguntas: 0</h3>
  	</div>

  </div>





<div id="a" class="desc" <?php if ($value === "a") { } else {echo 'style="display:none;"';} ?> >
	  <div class="row">
	    <form class="col s12">
	      <div class="row container">
	        <div class="input-field col s12">
	          <textarea id="pregunta1" class="pregunta materialize-textarea white-text shadow"></textarea>
	          <label for="textarea1" style="font-size:50px; font-family:borf; " class="white-text shadow">Pregunta</label>
	        </div>
	      </div>
	    </form>
	  </div>

	  <br>	

	  <div class="row container">
	  		<div class="input-field col s4 respuestaMala">
	          <textarea id="mala1" class="materialize-textarea white-text shadow"></textarea>
	          <label for="textarea1" class="white-text shadow">Respuesta A</label>  					
	  		</div>
	  		<div class="input-field col s4 respuestaMala">
	          <textarea id="mala2" class="materialize-textarea white-text shadow"></textarea>
	          <label for="textarea1" class="white-text shadow">Respuesta B</label>  			
	  		</div>
	  		<div class="input-field col s4 respuestaCorrecta">
	          <textarea id="resp" class="materialize-textarea white-text shadow "></textarea>
	          <label for="textarea1" class="white-text shadow">Respuesta Correcta</label>  			
	  		</div>
	  	
	  </div>
  </div>
  <div class="desc " id="b" <?php if ($value === "b") {} else {echo 'style="display:none;"';} ?>>
  	<div class="row container">
  		<h5 class="white-text shadow col s8">Eg: En el momento que _________ llego al pueblo todos se alegraron!</h5>
  		<div class="input-field col s4">
	    	<textarea id="ejm" class="materialize-textarea white-text shadow"></textarea>
	    	<label for="textarea1" class="white-text shadow">Respuesta</label>  					
	  	</div>
  	</div>

  	<br>
  	<div class="divider container"></div>
  	<div class="divider container"></div>
  	<br>

  		  <div class="row">
		    <form class="col s12">
		      <div class="row container">
		        <div class="input-field col s8 pregunta">
		          <textarea id="pregunta2" placeholder="Escribe tu pregunta aqui" class=" materialize-textarea white-text shadow"></textarea>
		          <label for="textarea1" style="font-size:50px; font-family:borf; " class="white-text shadow">Pregunta</label>
		        </div>

				    <div class="input-field col s4 respuestaCorrecta">
			          <textarea id="respuesta" class="materialize-textarea white-text shadow "></textarea>
			          <label for="textarea1" class="white-text shadow">Respuesta Correcta</label>  			
			  		</div>

		      </div>
		    </form>



		  </div>


  	
  </div>


  <div class="desc" id="c" <?php if ($value === "c") {} else { echo 'style="display:none;"';} ?> >
  	
		  <div class="row">
		    <form class="col s12">
		      <div class="row container">
		        <div class="input-field col s8 pregunta">
		          <textarea id="pregunta3" class=" materialize-textarea white-text shadow"></textarea>
		          <label for="textarea1" style="font-size:50px; font-family:borf; " class="white-text shadow">Pregunta</label>
		        </div>


				    <div class="input-field col s4">
					    <p class="">
					      <input name="vof" type="radio" id="rbtnV" class="white with-gap" checked="checked" />
					      <label for="rbtnV" class="white-text shadow">Verdaro</label>
					    </p>
					    <p class="">
					      <input name="vof" type="radio" id="rbtnF" class="white-text with-gap" />
					      <label for="rbtnF" class="white-text shadow">Falso</label>
					    </p>		
			  		</div>


		      </div>
		    </form>



		  </div>

  </div>

	<br>
  <div class="row container">
  <div class="col m2"></div>
  	<div class="col s12 m6">
  		<a id="GuardarCon" class="col s12 waves-effect waves-light btn right"><i class="material-icons right">add</i>Guardar / Continuar</a>
  	</div>
  	<div class="col s12 m4">
  		<a id="finGuia" usuario="<?php echo	$_SESSION['usr']; ?>" class="col s12 waves-effect waves-light btn"><i class="material-icons right">done_all</i>Finalizar Guia</a>
  	</div>
  </div>

  <br>	
  <br>	

  <div id="bgGuia" class="row container">
  	<div class="row">
		<h1 class="title white-text stroke col s12 center " style="font-size:90px;">Guia</h1>
	</div>
		<div class="divider black container"></div>




  </div>