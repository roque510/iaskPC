
<?php   require("config.php"); 

$database = new medoo([
          'database_type' => 'mysql',
          'database_name' => $DB,
          'server' => $SVR,
          'username' => $USR,
          'password' => $PW,
          'charset' => 'utf8'
        ]);
?><script>var array = [];</script>
<div id="bgGuia" class="row container z-depth-4">
	
	<div class="row">
  <?php 

  

  if (isset($_GET['id'])) {
      $ID = $_GET['id'];
  }
  else
    $ID = "aaa99+";


if ($database->has("guia", [

      "Idguia" => $ID,

]))
{
  $buscar = true;
}

if (!$buscar) {
  echo '<li class="grey white-text">Esta guia no existe...</li>';
}else
{

  $data = $database->select("guia","*", [
    "Idguia" => $ID
  ]);}

  $cali = $data[0]["Calificacion"];



?>
		<h1 class="title white-text stroke col s8 center " style="font-size:90px;"><?php echo $data[0]["Nombre"]; ?></h1>

                <div id="rating" class="col s4 right " style="margin-top:80px;">
                  <div class="" style="width: 305px; height:50px;">
                    <div class="starrow"><div><i class="starhalf material-icons prefix"><?php echo $cali>0?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf material-icons prefix"><?php echo $cali>1?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf material-icons prefix"><?php echo $cali>2?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf material-icons prefix"><?php echo $cali>3?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf material-icons prefix"><?php echo $cali>4?'star':'star_border'; ?></i></div></div>
                  </div>                  
                </div>
	</div>
  <div class="creador row center">Creador: <a href='?pg=perfil&usr=<?php echo $data[0]["creador"]; ?>'><?php echo $data[0]["creador"]; ?></a></div>

	<div class="divider black container"></div>


<?php   

  $datas = $database->select("pregres","*", [
    "Idguia" => $ID
  ]);
    $count = 0;

 foreach($datas as $data)
  {
    $count++;
  


?>
<script>
var valueToPush = new Array();
valueToPush.push("<?php echo $data['Pregunta']; ?>");
valueToPush.push("<?php echo $data['Respuesta']; ?>");
array.push(valueToPush);


</script>

<div class="row  center borf font60">
  <div class="col m2  "><?php echo $count; ?><span><i class="material-icons">label</i></div>
  <input type="text" class="col m8 center borf font60 preguntaEdit" value="<?php echo $data['Pregunta']; ?>" /><i class="material-icons delQuest" arraynum="<?php echo $count - 1; ?>" >delete</i>
  <input class="row font60 borf resp center teal-text" value="R= <?php echo $data['Respuesta']; ?>" />
</div>





<?php
}//fin del for each
?>

		<div class="divider black container"></div>


	
	    <br>
      <div class="row container right">
        <div class="col m2"></div>
        <div class="col m5">
          <a class="waves-effect waves-light btn right back" href="#"><i class="material-icons left">undo</i>Regresar</a>
        </div>
        <div class="col m5">
          <a class="waves-effect waves-light btn"><i class="material-icons left">rate_review</i>Calificar</a>
        </div>
      </div>
</div>
<script type="text/javascript">
  console.log(array);
</script>

