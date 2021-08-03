<?php 

$conn = mysqli_connect('localhost', 'antoine', 'antoine', 'pizza');

if ( !$conn ) {
	echo 'Connection error: ' . mysqli_connect_error();
}