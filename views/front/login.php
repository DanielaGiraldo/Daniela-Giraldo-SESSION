

<?php include ('templates/head.php'); ?>
<br>
 <br>
 <body style="background-color:#F7F6FC  ;">
	<div class="container spacing-top">
		

				<fieldset>
					<legend style="font-size:35px;">Formulario de Ingreso</legend>
						<form name="login" method="post" action="http://localhost/webmail2/app/Http/Controllers/Controller.php">
							<br><br>
							<p>
                                <input type="email"  class="form-control button2" name="correo_log" placeholder="Correo electronico.." required>
                                 </p>
							
							<p>
                                <input type="password"  class="form-control button2" name="pass_log" placeholder="Contraseña.." required>
                                 </p>
							
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								
                                  
								
								<input  type="submit" name="btn-login" class="button6"value="Ingresar";>
	                            <input  type="reset" class="button7" value="Cancelar">
							
								
							</p>
						</form>
					</fieldset>

			</div>

	
<br><br><br><br><br>

<?php include ('templates/foot.php'); ?>