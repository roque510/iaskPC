<div class="row container error">
	<img src="img/404.png" height="100%" width="100%" style="margin-top: 100px;">
</div>
<?php if (isset($_GET['msg'])) {
	echo $_GET['msg'];
} ?>