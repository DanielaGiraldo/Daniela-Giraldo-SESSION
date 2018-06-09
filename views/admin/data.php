
<?php

if(isset($_GET['data'])){
	
	session_start();
}


include ('templates/head.php');

?>


<div class="container spacing-top">
<div class="row">
	<div class="col-4 color">
		<figure>
			<?php include('partials/genre.php') ?>
		</figure>
	</div>
           
     <div class="col-8 color bienvenido">
     <h2>Bienvenid@:<i>

	
		<?php 
		if(isset($_SESSION['usuario'])){
			echo $_SESSION['usuario'];
			}
			 ?>
    </i></h2>
</div>

<div class="col-12 color3">

<?php include('forms/form_data.php'); ?>
</div>
</div>
</div>

<br><br>
<?php include ('templates/foot.php'); ?>