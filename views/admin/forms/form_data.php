<h2 class="gris">Mis Datos</h2>
<form name="form_data" method="post" action="http://localhost/webmail2/app/Http/Controllers/Controller.php">
	<br>
	<label>Nombre:</label><input class="form-control button2 " style="background-color:#fff;"type="email" value="<?php echo $_SESSION['usuario']; ?>" readonly>
	<label>Genero:</label><input class="form-control button2 colorboton"  style="background-color:#fff;"  type="text" value="<?php echo $_SESSION['genero']; ?>" readonly>
	<label>E-mail:</label><input class="form-control button2 colorboton"  style="background-color:#fff;" type="text" value="<?php echo $_SESSION['email']; ?>" readonly>
	<label>Contraseña:</label><input class="form-control button2 colorboton"  style="background-color:#fff;" type="text" value="<?php echo $_SESSION['pass']; ?>" readonly>

</form>
	