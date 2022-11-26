<?php

$conexao = mysqli_connect('localhost','root','') 
or die ('could not connect:'.mysqli_error(die));

mysqli_select_db($conexao, 'aprendendo_bd')
or die('could not connet:'.mysqli_error(die));


?>