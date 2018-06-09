<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');
//validar errores
if(isset($_GET['error'])){
	include ('views/errors/errors.php');
}
?>
<body style="background-color:#F7F6FC  ;">
<div class="container spacing-top">
	<br><br>


<div class="container">
<center>
	<h1 style="color: #463E6D  ;">Mail.com</h1>
</center>
<br><br><br>
<section class="main row">
	<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <p style="text-align:justify;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       
       </p>
	</article>



</section>
<br><br><br>

<center>
<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
       <p >
        <img src="http://localhost/webmail2/public/images/imagen.png" width="40%">
       
       </p>
	</article>
</center>

</div>



<br><br>
	
	
			

			

<?php include ('views/front/templates/foot.php'); ?>

</div>