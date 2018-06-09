<fieldset>
					
<body style="background-color:#F7F6FC  ;">
					<legend>Redactar nuevo mensaje</legend>
						<form name="register" method="post" action="http://localhost/webmail2/app/Http/Controllers/Controller.php">
							<p>
    
                            <input type="email" class="form-control button2" name="dest_msg" placeholder="Para:" required>
                            </p>
                            <p>
   
                            <input type="text" class="form-control button2" name="asunto_msg" placeholder="Asunto:" required>
                            </p>
  

                            <p>

                            <textarea class="form-control button2" name="msg" rows="3" placeholder="Mensaje"></textarea>
                            </p>

							<p>
								

								<input  type="submit" name="btn-msg" class="button6"value="Enviar mensaje">
	                            <input  type="reset" class="button7" value="Limpiar datos">
							</p>
						</form>
					</fieldset>