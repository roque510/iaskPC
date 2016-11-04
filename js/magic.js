$( document ).ready(function() {
    $('.slider').slider('start');

    $(document).ready(function() {
    $("input[name$='group1']").click(function() {
        var test = $(this).val();
         document.location.href = '?pg=create&btn=' + test;
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







