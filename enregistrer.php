<?php
include('connexionbdd.php');

$elements = $_POST;
//print_r($elements);

$sql="INSERT INTO `contact` (`nom`, `email`, `texte`)
VALUES
('".$_POST['nom']."', '".$_POST['email']."', '".$_POST['texte']."');";
//print_r($sql);
if (mysqli_query($mysqli, $sql)) {
    echo "Nouveau enregistrement créé avec succès";
}
include('admin.php');
?>