
<!-- Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).
Méthode: GET Affiche un message différent selon la réponse au formulaire.

Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?" -->

<a href="form.php"></a>

<?php

  $age= $_GET['age'];

  if ($age <= 12) {
    $bonjour= "Salut petit !";
  }elseif ($age >12 AND $age <= 18) {
    $bonjour= "Salut l'ado !";
  }elseif ($age > 18 AND $age <= 115) {
    $bonjour= "Salut l'adulte !";
  }else {
    $bonjour="Wow toujours vivant !";
  }
echo $bonjour;
 ?>
