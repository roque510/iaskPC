
$( document ).ready(function() {

var validate = function(){

	  if($( "#cv" ).val() != "")
  		if($( "#cn" ).val() != "")
  			if($( "#cnr" ).val() != "")
  				if ($( "#cn" ).val() === $( "#cnr" ).val()) {
  					$("#cc").removeClass("disabled");	
  					$( "#lblcnr" ).html("");
  				}  				
  			else
  				$("#cc").addClass("disabled");
 }

     $(document).on('keyup', validate);
    $('input').focus(validate);




	$('a.back').click(function(){
		parent.history.back();
		return false;
	});
	
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

$("#btnToken").click(function(e){
	$.ajax({
		url: 'email.php',
		type: 'POST',
		dataType: 'json',
		data: {email:$('#btnToken').attr('email')},
		beforeSend: function() {
    			$('#modal1').openModal();    					
    	},
    	success: function(data){
    		$('#modal1').closeModal();
    		swal("Perfecto,","el token a sido enviado a tu correo!","success");
    	},
    	error: function(jqXHR, textStatus, errorThrown) {
			        console.log(JSON.stringify(jqXHR));
			      	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    	}

	});
});

$("#emailS").click(function(e){
	console.log("emails!");
		if ($('#nuevoCorreo').val() === "" || $('#token').val() === "" ) {
		swal("Alto!","Debes llenar todos los campos","warning");
		return;
	}
	swal("IMPORTANTE!","Revisa tu correo nuevo por un link de confirmacion para poder completar la activacion de tu nuevo correo!","warning").then(function(){
			$.ajax({
		url: 'cemail.php',
		type: 'POST',
		dataType: 'json',
		data: {email:$('#btnToken').attr('email'),nemail:$('#nuevoCorreo').val(),token:$('#token').val()},
		beforeSend: function() {
    			$('#modal1').openModal();    					
    	},
    	success: function(data){
    		$('#modal1').closeModal();
    		console.log(data);
    	},
    	error: function(jqXHR, textStatus, errorThrown) {
			        console.log(JSON.stringify(jqXHR));
			      	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    	}

	});
	});
});

$("#cemail").click(function(e){
	if ($('#nuevoCorreo').val() === "" || $('#token').val() === "" ) {
		swal("Alto!","Debes llenar todos los campos","warning");
		return;
	}

	$.ajax({
		url: 'cemail.php',
		type: 'POST',
		dataType: 'json',
		data: {email:$('#btnToken').attr('email'),nemail:$('#nuevoCorreo').val(),token:$('#token').val()},
		beforeSend: function() {
    			$('#modal1').openModal();    					
    	},
    	success: function(data){
    		$('#modal1').closeModal();
    		console.log(data);
    	},
    	error: function(jqXHR, textStatus, errorThrown) {
			        console.log(JSON.stringify(jqXHR));
			      	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    	}

	});
});

$('#pwd').keypress(function(e) {
    if(e.which == 13) {
    	$("#initlog").click();
    }
});

$('#usr').keypress(function(e) {
    if(e.which == 13) {
    	$("#initlog").click();
    }
});

$("#initlog").on('click',function(e){
	$.ajax({
		url: 'usrp.php',
            type: "POST",
            dataType:'json',
            data:  {usr:$('#usr').val(),pwd:$('#pwd').val()},
            beforeSend: function() {
    			$('#modal1').openModal();
    					var delay=1000; //1 second
    		},
            success: function (data) {
            	 $('#modal1').closeModal();
            	 console.log(data.response);
            	 console.log(data);
              if(data.response == "correcto"){
                swal("EXITO!","Bienvenido "+data.user+"!", "success").then(function(e){
                	location.reload();
                });
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

	

$( "#cnr" ).focusin(function(e){
if ($( "#cn" ).val() != $( "#cnr" ).val()) {
		  Materialize.toast('<span class="amber-text">Las contraseñas deben ser iguales!</span>', 3000, 'rounded');
	}
});

$( "#cnr" ).focusout(function(e){
if ($( "#cn" ).val() != $( "#cnr" ).val()) {
		  Materialize.toast('<span class="amber-text">Las contraseñas deben ser iguales!</span>', 3000, 'rounded');
	}
});

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

$("#savepic").click(function(e){
	$usr = $("#savepic").attr("usr");
	$foto = $("#pic").val();

	$.ajax({
		type: "post",
		url: "savepic.php",
		dataType:'json',
		data: {usr:$usr,foto:$foto},
		beforeSend: function() {
		    			$('#modal1').openModal();
		    		},
		success: function (data) {
			swal(data.comment);
			location.reload();
		},
		error: function(ex) {
				console.log(ex);
		}

	});

});





$("#cc").click(function(e){
	$cv = $("#cv").val();
	$cn = $("#cn").val();
	$usr = $("#cv").attr("usr");

	console.log($cv+' '+$cn+ ' '+$usr);

	$.ajax({
		type: "post",
		url: "cc.php",
		dataType:'json',
		data: {pwd:$cv,cn:$cn,usr:$usr},
		beforeSend: function() {
		    			$('#modal1').openModal();

		    		},
		success: function (data) {
			if(data.response == "correcto")
					swal("Excelente!","contraseña cambiada exitosamente","success").then(function(){
						location.reload();
					});
			else
				swal("Oh no...","La contraseña actual no es igual a la que ingresaste...","error").then(function(){
					location.reload();
				});
			
			
		},
		error: function(ex) {
				console.log(ex);
		}

	});

});

var guia = [["0","inicio","","TITULO","",""]];


$("#finGuia").click(function(e){
	swal({
  title: 'Seguro?',
  text: "Quieres finalizar esta guia?",
  type: 'info',
  showCancelButton: true,
  confirmButtonText: 'Si, finalizar',
  cancelButtonText: 'No, aun no he terminado',
 
}).then(function() {
	swal({
	  title: 'Escibre el Nombre de tu guia',
	  input: 'text',
	  showCancelButton: true,
	  inputValidator: function(value) {
	    return new Promise(function(resolve, reject) {
	      if (value) {
	        resolve()
	      } else {
	        reject('Necesitas escribir el titulo de tu guia!')
	      }
	    })
	  }
	}).then(function(result) {
		swal({
		  title: "Describe tu guia. ('Materia','Instituto' etc.)",
		  input: 'textarea',
		  showCancelButton: true
		}).then(function(text) {
			$.ajax({
				url: 'guia.php',
		            type: "POST",
		            dataType:'json',
		            data:{guia:guia,titulo:result,desc:text,usr:$('#finGuia').attr('usuario')},
		            beforeSend: function() {
		    			$('#modal1').openModal();
		    		},
		            success: function (data) {            	 
		            	 $('#modal1').closeModal();            	
		            	 console.log(data);
		              if(data.response == "correcto"){
		                swal("EXITO!","Guia Finalizada.", "success");
		              }
		              else {
		                swal("Oh no!", data.comment, "error");
		                 //$('#modal1').openModal(); //LOADING ANIMATION
		              }
		            },
		            error: function(ex) {
					        console.log(ex);
					        
					 }
			});
		})

	})
}, function(dismiss) {
  // dismiss can be 'cancel', 'overlay',
  // 'close', and 'timer'
  if (dismiss === 'cancel') {

  }
})
});

$('.deleteG').click(function(e){
	var guia = $(this);
	swal({title:"Atencion!",html:"<b><i><h2 class='teal-text'>"+$(this).attr("Nombre")+"</h2></b></i><h4>Seguro que quieres borrar esta guia?</h4>",type:"warning",showCancelButton: true, confirmButtonText: "Si", cancelButtonText: "No"}).then(function () {
		$.ajax({
				url: 'delete.php',
		            type: "POST",
		            dataType:'json',
		            data:{idguia:guia.attr("idGuia")},
		            beforeSend: function() {
		    			$('#modal1').openModal();
		    		},
		            success: function (data) {            	 
		            	 $('#modal1').closeModal();            	
		            	 console.log(data);
		              if(data.response == "correcto"){
		                swal("Enhorabuena!","La guia fue borrada exitosamente", "success").then(function(e){
		                	location.reload();
		                });
		              }
		              else {
		                swal("Oh no!", data.comment, "error");
		                 //$('#modal1').openModal(); //LOADING ANIMATION
		              }
		            },
		            error: function(ex) {
					        console.log(ex);
					        
					 }
			});
});
});

$('.delQuest').click(function(e){
	var num = $(this).attr('arraynum');
	array.splice(num, 1);
	var parent = $(this).parent();
	parent.remove();
	console.log(array);
});

/*
$('.preguntaEdit').click(function(e){
	 var input = $('<input />');
	$(this).replaceWith('<input class="editting col m8 font60 borf" type="text" value="'+$(this).text()+'" />');
});

$('.editbtn').click(function(e){
	$('.preguntaEdit').click();
});

$("#bgGuia").click(function(e){
	$('.editting').replaceWith('<div class="col m8  preguntaEdit">'+$('.editting').text()+'"</div>');
});

$('.doneEditPreg').click(function(e) {


swal("e");
});*/








