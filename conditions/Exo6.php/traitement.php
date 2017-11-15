<!-- Crée un petit formulaire qui réagit à la note de l'étudiant.
Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
Si la note est égale à 10, affiche "Tout juste!"
Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
Si la note est 15, 16, 17, ou 18, affiche "Bravo!".
Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!". -->


<a href="form.php"></a>

<?php

$points = $_POST['points'];
$nom = $_POST['nom'];
$commentaire = "";
//
// if($points <= 5){
//   $commentaire = "ce travail est nulle";
//
// }elseif ($points >= 6 AND $points < 10) {
//   $commentaire = "ce travail n'est pas terrible";
//
// }elseif ($points ==10) {
//   $commentaire = "tout juste !";
//
// }elseif ($points > 10 AND $points <= 14) {
//   $commentaire ="c'est pas mal.";
//
// }elseif ($points >= 15 AND $points <= 18) {
//   $commentaire ="c'est pas mal.";
//
// }else {
//   $commentaire = "Police ! Arrêtez ce tricheur ";
// }
//
// echo "$nom . $commentaire";




switch ($points) {

  case ($points <= 5):
    echo "Ce travil est insatisfaisant !";
    break;
  case ($points >= 6 AND $points < 10):
    echo "ce travail n'est pas terrible";
    break;
  case ($points ==10):
    echo "tout juste !";
    break;
  case ($points > 10 AND $points <= 14):
    echo "c'est pas mal.";
    break;
  case ($points >= 15 AND $points <= 18):
    echo "string";
    break;
  default:
    echo "Police ! Arrêtez ce tricheur";
    break;
}

 ?>
