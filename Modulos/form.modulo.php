<?php 
modulo('header');
?>
<div class="row container">
	<h1 class="white-text">Registrate</h1>
</div>
<div class="tilebg container" style="margin-top:50px;">
	 <div id="formReg" class="row">
    <form id="regForm" class="col s12" name="down">
      <div class="row">
        <div class="input-field col s12 m6">
          <i class="material-icons  prefix">face</i>
          <input id="usr" name="usr" type="text" class="validate ">
          <label class="white-text" for="usr">Usuario</label>
        </div>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="name" name="name" type="text" class="validate">
          <label class="white-text" for="name">Nombre</label>
        </div>
      </div>

            <div class="row">
        <div class="input-field col s12 m6">
          <i class="material-icons  prefix">perm_identity</i>
          <input id="lastname" name="lastname" type="text" class="validate ">
          <label class="white-text" for="lastname">Apellido</label>
        </div>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="text" class="validate">
          <label class="white-text" for="email">Correo</label>
        </div>
      </div>

            <div class="row">
        <div class="input-field col s12 m6">
          <i class="material-icons  prefix">lock</i>
          <input id="pwd" name="pwd" type="password" class="validate ">
          <label class="white-text" for="pwd">Contraseña</label>
        </div>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">lock</i>
          <input id="pwd2" name="pwd2" type="password" class="validate">
          <label class="white-text" for="pwd2">Confirmar Contraseña</label>
        </div>
      </div>

    </form>
  </div>

	<a id="frmbtn" class="frmbtna waves-effect waves-light btn " ><i class="material-icons right">save</i>Salvar</a>
  <a class="waves-effect waves-light btn right back" href="#"><i class="material-icons left">undo</i>Regresar</a>


</div>