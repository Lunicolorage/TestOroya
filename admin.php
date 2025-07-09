<?php
require_once __DIR__.'/bootstrap.php';
include('connexionbdd.php');

$sql="SELECT * from contact";
$elements =mysqli_query($mysqli, $sql);
$contenuContact=mysqli_fetch_all($elements, MYSQLI_ASSOC);
//print_r($contenuContact);


echo $twig->render('admin.twig.html', ['contact' => $contenuContact] );
?>
