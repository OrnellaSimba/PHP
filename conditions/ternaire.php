<?php

$genre="F";

/*if ($genre == "H") {
  $bonjour="Bonjour, Monsieur !";
}else{
  $bonjour="Bonjour, Madame";
}*/

$bonjour = ($genre == "H") ? "bonjour, Monsieur !" : "bonjour, Madame !" ;
echo ($bonjour);

 ?>
