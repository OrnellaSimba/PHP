<!-- Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre -->



<?php

$age=$_GET['age'];
$genre= $_GET['genre'];
$anglais=$_GET['anglais'];
$bonjour= "";

  if ($age <= 12) {
    if ($anglais == "no") {
      if ($genre == "masculin") {
        $bonjour="Salut petit!";
      }
      elseif ($genre == "feminin") {
        $bonjour="Salut petite!";
      }
    }
    elseif ($anglais == "yes") {
      if ($genre == "masculin") {
        $bonjour="Hello boy!";
      }
      elseif ($genre == "feminin") {
        $bonjour="Hello Girl!";
      }
    }
  }
  if ($age > 12 and $age <= 18) {
    if ($anglais == "no") {
      if ($genre == "masculin") {
        $bonjour="Salut l'adolescent!";
      }
      elseif ($genre == "feminin") {
        $bonjour="Salut l'adolescente!";
      }
    }
    elseif ($anglais == "yes") {
      if ($genre == "masculin") {
        $bonjour="Hello Teenage boy!";
      }
      elseif ($genre == "feminin") {
        $bonjour="Hello Teenage girl!";
      }
    }
  }
  if ($age > 18 and $age <= 115) {
    if ($anglais == "no") {
     $bonjour="Salut l'adulte!";
    }
    elseif ($anglais == "yes") {
      if ($genre == "masculin") {
        $bonjour="Hello Sir!";
      }
      elseif ($genre == "feminin") {
        $bonjour="Hello Lady!";
      }
    }
  }
  elseif ($age > 115) {
    if ($anglais == "no") {
      if ($genre == "masculin") {
      $bonjour="Wow! Toujours vivant?";
      }
      elseif ($genre == "feminin") {
      $bonjour="Wow! Toujours vivante?";
      }
    }
    elseif ($anglais == "yes") {
      if ($genre == "masculin") {
      $bonjour="Wow! Still alive, old man?";
      }
      elseif ($genre == "feminin") {
      $bonjour="Wow! Still alive, old lady?";
      }
    }
  }

echo $bonjour;

?>
