<?php

include "application/bdd_connection.php";

if(!empty($_POST)){
	$query = $pdo->prepare('
	INSERT INTO users (Name, Mail, Phones, Contenus,  CreationTimestamps)
	VALUES ( ?, ?, ?, ?, NOW());

	');

	$query->execute([$_POST['Name'], $_POST['Mail'], $_POST['Phones'], $_POST['Contenus']]);
	
	$result = $query->fetch();
	
	header('location: contact.php');
	exit();
}
else{
$template ='contact';
include 'layout.phtml';
}