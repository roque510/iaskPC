$( document ).ready(function() {
    $('.slider').slider('start');

    $(document).ready(function() {
    $("input[name$='group1']").click(function() {
        var test = $(this).val();
         //document.location.href = '?pg=create&btn=' + test;
        $("div.desc").hide();
        $("#" + test).show();
    });
});



});

var star = $(".star");

star.click( function(){
	var starobj = this.id;
	var idStar = parseInt(this.id);
	var value = ((idStar - (Math.round(idStar / 10) * 10)) / 2) + ((Math.round(idStar / 10) * 10)) / 10 -1; // Value of clicked star
	alert(value);
		
		star.each(function(i, obj) {
			
			if(this.id <= idStar)
				$("#"+this.id).html("star");
			else				
				$("#"+this.id).html("star_border");
			
		});


});

    var frmbtn = $("#frmbtn");
var usr = $('#usr');
var namea = $('#name');
var lastname = $('#lastname');
var email = $('#email');
var pwd = $('#pwd');
var pwd2 = $('#pwd2');

pwd2.keypress(function(e) {


    if(e.which == 13) {
        frmbtn.click();
    }
});

frmbtn.click(function(e) {
	e.preventDefault();
	if (pwd.val() != pwd2.val()) {
		swal('No coinciden!',"las contraseñas deben ser iguales!",'error');
		return;

	}

var check = true;

  if(!usr.val())
  	check = false;
  if(!namea.val())
  	check = false;
  if(!lastname.val())
  	check = false;
  if(!email.val())
  	check = false;
  if(!pwd.val())
  	check = false;
  if(!pwd2.val())
  	check = false;


  if(check)
		$.ajax({
            url: 'reg.php',
            type: "POST",
            dataType:'json',
            data: $('#regForm').serialize(),
            beforeSend: function() {
    			$('#modal1').openModal();
    		},
            success: function (data) {
            	 $('#modal1').closeModal();
              if(data.response == "correcto"){
                swal("EXITO!","Bienvenido "+data.user+", ahora ve a tu correo para verificar tu cuenta!", "success").then(function(){
                	location.href = "index.php";
                })
              }
              else {
                swal("Oh no!", data.comment, "error");
                 //$('#modal1').openModal(); //LOADING ANIMATION
              }
            },
            error: function(){

            }
          });
  else
  	swal('Oops...', 'Debes llenar todos los campos del formulario!', 'error');
  

});

$("#loginFrm").on('submit',function(e){
	$.ajax({
		url: 'usrp.php',
            type: "POST",
            dataType:'json',
            data:  $('#loginFrm').serialize(),
            beforeSend: function() {
    			$('#modal1').openModal();
    		},
            success: function (data) {
            	 $('#modal1').closeModal();
              if(data.response == "correcto"){
                swal("EXITO!","Bienvenido "+data.user+"!", "success");
              }
              else {
                swal("Oh no!", data.comment, "error");
                 //$('#modal1').openModal(); //LOADING ANIMATION
              }
            },
            error: function(jqXHR, textStatus, errorThrown) {
			        console.log(JSON.stringify(jqXHR));
			        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
			 }
	});
});

var guia = [["0","inicio","guia de aroque","SM","",""]];

$('#GuardarCon').click(function(){
var pregunta;
var respuesta;
var mala1 = "";
var mala2 = "";
var tipo;

	if ($("#test3").is(':checked')) {
		tipo = "VoF";
		pregunta = $("#pregunta3").val();
		if ($("#rbtnV").is(':checked')) {
			respuesta = "Verdadero";
		}
		else
			respuesta = "Falso";		
	}

	if ($('#test1').is(':checked')) {
		tipo = "SM";
		pregunta = $("#pregunta1").val();
		mala1 = $("#mala1").val();
		mala2 = $("#mala2").val();
		respuesta =  $('#resp').val();
	}

		if ($('#test2').is(':checked')) {
		tipo = "Comp";
		pregunta = $("#pregunta2").val();		
		respuesta =  $('#respuesta').val();
	}

	var test = [guia.length,pregunta,respuesta,tipo,mala1,mala2];
	guia.push(test);

	mala1 = "";
	mala2 = "";

	$("#pregunta1").val("");
	$("#pregunta2").val("");
	$("#pregunta3").val("");
	$("#mala1").val("");
	$("#mala2").val("");
	$("#resp").val("");


	$("#bgGuia").append('<h1 class="preg center">'+guia[guia.length -1][0]+'<span><i class="material-icons">label</i></span> '+pregunta+' <span> ('+tipo+')</span></h1><h2 class="borf resp center teal-text">R= '+respuesta+'<span><i class="material-icons">check</i></span> </h2>');

	console.log(guia);
});


$("#finGuia").click(function(e){
	swal("hola");
});







