<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<title>Muestra de la base de datos con JSON</title>
</head>
<body>

	<?php

		// foreach ($query as $row)
		// 		{
		// 		   echo $row->actor_id.'<br>';
		// 		   echo $row->fullname.'<br>';
		// 		   echo $row->last_update.'<br>';
		// 		}

	?>



	<input type="button" class="cargar_json" value="Cargar json" />
 
    <p class="contenedor_json"></p>

    <script>
   // var baseurl = 'http://localhost/ajaxcodeigniter/';
				$(document).ready(function(){
					var num = 1;
					$(".cargar_json").click(function(){
							// AJAX, peticion
						$.post('nuevo/recuperaActoresId/'+num, function(data){

							//var result = JSON.parse(data);

							$(".contenedor_json").html(data);
							
						//	console.log(result);
							num++;
							});

						});


					});


				
    </script>

</body>
</html>