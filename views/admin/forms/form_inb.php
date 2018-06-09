<fieldset>
					<body style="background-color:#FCFBFE  ;"><br>
          <legend>Bandeja de Entrada..</legend>
           <form name="register" method="post" action="http://localhost/webmail2/app/Http/Controllers/Controller.php">  
						

<table style="margin-top:20px;" class="table table-hover">
  <tbody>
    <tr>
      <th><input type="submit" name="btn-read" value="<?php echo $dest_msg;?>" class="btn-read"> 
      <td><input type="submit" name="btn-read" value="<?php echo $asunto_msg;?>" class="btn-read">


      <td></td>
      <td><input type="submit" name="btn-read" value="<?php echo $fecha_actual=date("d/m/Y"); ?>" class="btn-read"></td>
    </tr>
    <tr>
       <th scope="row">esteban@gmail.com</th>
      <td>Visita est pagina</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
     </tr>
         <th scope="row">blanca@gmail.com</th>
      <td>Restaurante MAX descuento</td>
        <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
      <th scope="row">kter@gmail.com</th>
      <td>documento para diligenciar</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
       <th scope="row">wertgmail.com</th>
      <td>Bienvenido a San Luis</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
 </tr>
 <tr>
      <th scope="row">fundacionalgmail.com</th>
      <td>Te esperamos</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
       <th scope="row">Google</th>
      <td>Alerta de seguridad </td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
     </tr>
         <th scope="row">harvey</th>
      <td>Mira las increibles ofertas de ropa</td>
        <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
      <th scope="row">dft@gmail.com</th>
      <td>Daniela tienes 5 minutos para aprender una nueva leccion</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
    </tr>
    <tr>
       <th scope="row">rocio</th>
      <td>Disfrutas de las mejores fotos</td>
      <td></td>
      <td><?php echo $fecha_actual=date("d/m/Y"); ?></td>
 </tr>
 </table>
     
              <p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="dest_msg" value="<?php echo $dest_msg; ?>">
								<input type="hidden" name="asunto_msg" value="<?php echo $asunto_msg; ?>">
								<input type="hidden" name="msg" value="<?php echo $msg; ?>">
							</p>
						</form>
					</fieldset>
