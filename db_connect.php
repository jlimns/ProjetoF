<?php

//Conexão com banco de dados

$servername="sql212.byetcluster.com";
$username="epiz_23413298";
$password="kivgh5dL";
$db_name="epiz_23413298_login_site";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):

	echo"Falha na Conexão:".mysqli_connect_error();
endif;