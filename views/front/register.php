<?php include ('templates/head.php'); 

if(isset($_GET['error'])){
	include ('views/errors/errors.php');
}
?>
 <br>
 <br>
<body style="background-color:#F7F6FC  ;">
	<div class="container spacing-top">
          
			
				
				<fieldset>
					<legend style="font-size:35px;">Formulario de Registro</legend>
						<form name="register" method="post" action="http://localhost/webmail2/app/Http/Controllers/Controller.php">
							<br><br>
							<p>
								<select class="button6" name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
                                <input type="text"  class="form-control button2" name="nombre" placeholder="Nombre completo.." required>
                                 </p>
                                 
                                 <p>
                                 <input type="email" name="correo" class="form-control button2" placeholder="Correo electronico.." required>
                                 </p>
  

                                  <p>
                                   <input type="password" name="password" class="form-control button2" placeholder="Contraseña.." required>
                                 </p>

                                 <p>
                                   <input type="password" name="conf_pass" class="form-control button2" placeholder="Confirmar contraseña.." required>
                                 </p>
                                
                                

                                 <p>
	                            <input  type="submit" name="btn-register" class="button6"value="Registrar usuario";>
	                            <input  type="reset" class="button7" value="Limpiar datos">
                                </p>
                             </form>
                         </fieldset>
                         <p><a href="http://localhost/webmail2/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>

			</div>

	
	
<br><br><br><br>
<?php include ('templates/foot.php'); ?>