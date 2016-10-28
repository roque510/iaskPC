<div id="rating">
	<div class="" style="width: 305px; height:80px;">
		<div class="starrow">
			<div>
				<i id="12" class="star starhalf material-icons prefix">star</i>
			</div>
			<div class="seconHalf">
				<i id="11" class="star material-icons yellow-text prefix">star</i>
			</div>
		</div>
		<div class="starrow">
			<div>
				<i id="22" class="star starhalf material-icons prefix">star</i>
			</div>
			<div class="seconHalf" >
				<i id="21" class="star material-icons yellow-text prefix">star</i>
			</div>
		</div>
		<div class="starrow">
			<div>
				<i id="32" class="star starhalf material-icons prefix">star_border</i>
			</div>
			<div class="seconHalf">
				<i id="31" class="star material-icons yellow-text prefix">star_border</i>
			</div>
		</div>
		<div class="starrow"> 
			<div>
				<i id="42" class="star starhalf material-icons prefix">star_border</i>
			</div>
			<div class="seconHalf">
				<i id="41" class="star material-icons yellow-text prefix">star_border</i>
			</div>
		</div>
		<div class="starrow">
			<div>
				<i id="52" class="star starhalf material-icons prefix">star_border</i>
			</div>
			<div class="seconHalf">
				<i id="51" class="star material-icons yellow-text prefix">star_border</i>
			</div>
		</div>
	</div>
	
</div>
<style type="text/css">
	.starrow{
		float: left;
	}

	.seconHalf{
		margin-top:-65.5px; width:30px; overflow:hidden;
	}

	.star{
		cursor:pointer;
		font-size: 60px;
		color: #ffeb3b !important;
	}
	.star:hover{
		color: rgba(210,146,52,1) !important;
	}

</style>
<script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript">
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

</script>