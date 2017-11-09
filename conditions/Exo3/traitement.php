<!-- 3. Affiche une salutation différente selon l'âge et le $genre de l'utilisateur.
Complète le formulaire de l'exercice précédent en ajoutant une deuxième question : "Homme ou Femme?" (champ de type Radio). Si le $genre est féminin, adapte la réponse de l'âge correspondant au $genre féminin.
Par exemple, si l'âge est entre 12 et 18 ans et le $genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
Idem pour les autres tranches d'âge.
Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions. -->

<a href="form.php"></a>

<?php

$age= $_GET['age'];
$genre= $_GET['genre'];


if ($age >=0 AND $age<= 12) {

  if ($genre == 'feminin') {

    $bonjour = "Salut petite";

  }elseif ($genre == 'masculin') {

    $bonjour ="Salut petit !";
  }else {
    $bonjour="Erreur, ceci n'est pas correcte";
  }
}elseif($age > 12 AND $age <= 18) {

    if ($genre == 'feminin') {

      $bonjour = "Salut l'adolescente !";

    }elseif ($genre == 'masculin') {

      $bonjour ="Salut l'adolescent!";
    }else {
      $bonjour="Erreur, ceci n'est pas correcte";
    }
}elseif ($age >18 AND $age<= 115) {

    if ($genre == 'feminin') {

      $bonjour = "Bonjour Madame !";

    }elseif ($genre == 'masculin') {

      $bonjour ="Bonjour Monsieur !";
  }
} elseif($age > 115) {

    if ($genre == 'feminin') {

      $bonjour = "Wow, chère Dame, Félicitation pour votre longue vie !";

    }elseif ($genre == 'masculin') {

      $bonjour = "Wow, cher Monsieur, Félicitation pour votre longue vie !";
    }else {
      $bonjour="Erreur, ceci n'est pas correcte";
    }
}else {
  $bonjour= "Erreur, ceci n'est pas correcte";
}

echo $bonjour;

 ?>
