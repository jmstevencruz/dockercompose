<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js"></script>
		<script type="text/javascript">
		function cargarDiv(){
		$('#mostrar').toggle();
		};

		</script>
	<title>Gestion de Usuarios</title>
</head>
<body background="images/golf.jpg" style="background-attachment: fixed; background-repeat: no-repeat;background-size: cover;" >
	<br><br><br><br><br><br><br>
	<fieldset class="fieldset" style="border:solid !important #0000FF;">
	<center><div class="tit"><h2 style="color: #0000FF; ">INGRESO</h2>
		<center><div class="Ingreso">
	<div class="col-md-1 offset-md-4">
	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt; color: #FFFFFF;"><b>CORREO: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt; color: #FFFFFF;"><b>PASSWORD: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
	
		</form>
	</div>
	</fieldset>
<br>

<input id="bt" name="bt" class="offset-lg-10 btn btn-warning" align="right" type="button" value="Nuevo Registro" onClick="cargarDiv();">

<!-- formulario registro -->
<div class="row" name ="mostrar" id="mostrar" style="display:none;">
<br><br><br><br><br><br>
<form method="post" action="" >
	<div class="form-group col-lg-4 offset-lg-6">
  <fieldset class="fieldset offset-lg-6">
    <legend  style="font-size: 20pt; color: #0000FF;"><b>REGISTRO NUEVO</b></legend>
  </fieldset>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-info" type="submit" name="submit" value="Registrarse"/>

  
  </div>
</form>
</div>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->


	</body>
</html>