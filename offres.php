<?php


if (empty($_GET['taskOption'])== false)
{
	include "Application/bdd_connection.php";


$query = '
SELECT
*
FROM travels
WHERE Continents = Europe
';

$resultat = $pdo->prepare($query);
$resultat->execute( [$_GET['taskOption']]);
$travels = $resultat->fetch();

var_dump($query);
echo json_encode($travels);

$query2 = '
SELECT
*
FROM travels
WHERE Continents = Amerique
';

$resultat2 = $pdo->prepare($query2);
$resultat2->execute( [$_GET['taskOption']]);
$travels2 = $resultat2->fetch();


echo json_encode($travels2);

$query3 = '
SELECT
*
FROM travels
WHERE Continents = Oceanie
';

$resultat3 = $pdo->prepare($query3);
$resultat3->execute( [$_GET['taskOption']]);
$travels3 = $resultat3->fetch();


echo json_encode($travels3);

$query4 = '
SELECT
*
FROM travels
WHERE Continents = Asie
';

$resultat4 = $pdo->prepare($query4);
$resultat4->execute( [$_GET['taskOption']]);
$travels4 = $resultat4->fetch();


echo json_encode($travels4);

$query5 = '
SELECT
*
FROM travels
WHERE Continents = Afrique
';

$resultat5 = $pdo->prepare($query5);
$resultat5->execute( [$_GET['taskOption']]);
$travels5 = $resultat5->fetch();


echo json_encode($travels5);
}

$template = 'offres';

include 'layout.phtml';