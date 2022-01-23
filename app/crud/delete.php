<?php

include_once('./../models/Database.php');

if (isset($_GET['id'])) {
	# Variables
	$id          = $_GET['id'];
	$connection  = Database::connect();

	# query
	$query = "UPDATE `cursos`
        SET `status` = 0
        WHERE `id`   = $id;";

	$result = mysqli_query($connection, $query);

	header('Location: ./../views/view-data.php');
} else {
	header('Location: ./../views/view-data.php');
}
