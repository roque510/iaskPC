      <div class="row container">
        <div class="input-field col s12 borf h1">
          <input id="cv" type="password" usr="<?php echo $_SESSION['usr']; ?>" class="validate  h1 borf white-text shadow">
          <label for="password"><span class="h3 white-text shadow">Contrasena Antigua</span></label>
        </div>

                <div class="input-field col s12 borf h1">
          <input id="cn" type="password" class="validate h1 borf white-text shadow">
          <label for="password"><span class="h3 white-text shadow">Nueva Contrasena</span></label>
        </div>

                <div class="input-field col s12 borf h1">
          <input id="cnr" type="password" class="validate h1 borf white-text shadow">
          <label for="password " ><span class="h3 white-text shadow">Repetir Contrasena nueva</span></label>
          <h3  id="lblcnr" class="font60 stroke   red-text"></h3>
        </div>
      </div>

      <div class="row container">
      	<div class="col m4"></div>
      	<div class="col m4">
      		<a class="waves-effect waves-light btn right back" href="#"><i class="material-icons left">undo</i>Regresar</a>
      	</div>
      	<div class="col m4">
      		<a id="cc" class="waves-effect waves-light btn disabled"><i class="material-icons left">save</i>Salvar</a>
      	</div>
      </div>
