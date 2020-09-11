<?php
$a_faire

for($i=1;$i<=7;$i++){
    $a_faire=$_GET["todo"];   // activite a faire
    if ($_GET["entry"]==" ")  { // trouver la case vide
        $_POST["entry"] = $a_faire;   // si libre,ajouter activite
    }
    else{ //si on arrive et que tel jour n est pas dispo
        continue; //avance a un autre jour
    }
}

$statut // une valeur de soit 0 ou 1 dans notre c0 va representer activte n a pas ete faite  activite fin



?>