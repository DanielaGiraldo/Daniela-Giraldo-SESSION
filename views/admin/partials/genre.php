<?php

if(isset($_SESSION['genero'])){
	$genre = $_SESSION['genero'];



                    if ($genre == 'hombre') {
						echo '<img src="http://localhost/webmail2/public/images/hombre.png" class="img-email">';
					}elseif($genre == 'mujer'){
						echo '<img src="http://localhost/webmail2/public/images/avatar.png" class="img-email">';
					} 
				}
?>
