<fieldset>
					
<body style="background-color:#F7F6FC  ;">
					<legend>Inbox: 
						<?php 
						if(isset($_SESSION['email'])){
							echo $_SESSION['email'];
							}
							 ?>
					</legend>
						<form name="register" method="post" action="http://localhost/webmail2/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" class="form-control button2" value="<?php echo $asunto_msg; ?>" style="background-color:#fff;" readonly>
							</p>
							<p>
								<input type="text" class="form-control button2" value="<?php echo $dest_msg; ?>" style="background-color:#fff;" readonly>
							</p>
							<p>
								<textarea class="form-control button2" rows="5" cols="100" style="background-color:#fff;" readonly><?php echo $msg; ?></textarea>
							</p>
							
						</form>
					</fieldset>