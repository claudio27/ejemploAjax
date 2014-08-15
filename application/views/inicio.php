<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<title>Muestra de la base de datos con JSON</title>
</head>
<body>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<h1>Ejemplo AJAX, JSON</h1>
	</div>
</div>

<div class="row">
	<div class="container">
		<table class="table">
			<?php foreach ($query as $row) { ?>
		<tr>

		      <td><?php echo $row->actor_id ?></td>
		      <td> <?php echo $row->fullname ?></td>
		      <td> <?php echo $row->last_update ?></td>
		      
	    </tr>
	    	<?php } ?>
	  	</table>
<div class="col-md-4"></div>
<div class="col-md-4">
	<input type="button" class="cargar_json btn btn-primary" value="Cargar json" />
</div>
	</div>
</div>



 
 <div class="row">
 	<div class="container">
	    <p class="contenedor_json bg-success"></p>
    </div>
</div>
    <script>
   // var baseurl = 'http://localhost/ajaxcodeigniter/';
				$(document).ready(function(){
					var num = 1;
					$(".cargar_json").click(function(){
							// AJAX, peticion
						$.post('nuevo/recuperaActoresId/'+num, function(data){

							//var result = JSON.parse(data);

							$(".contenedor_json").html(data);
						
						//	var str = JSON.stringify(data);
						//	$(".contenedor_json").html(str);
							
						//	console.log(result);
							num++;
							if(num == 11)
								num = 1;
							});

						});


					});


				
    </script>

</body>
</html>