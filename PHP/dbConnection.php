<?php
header('Access-Control-Allow-Origin: *');

function conexao(){
    $con = mysqli_connect('localhost','my_user','my_password','my_db');
	return $con;
}
?>