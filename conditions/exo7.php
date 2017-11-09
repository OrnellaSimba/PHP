<?php

$age="45";
$sexe="F";

if ($age >= 21 AND $age <= 40 ) {
  if ($sexe == "F") {
    $message ="Bonjour, bienvenue parmi nous !";
  }
} else {
  $message="Désolé, vous ne remplissez pas les critères de selection !"
}

echo $message ;



 ?>
