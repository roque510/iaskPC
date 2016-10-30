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

