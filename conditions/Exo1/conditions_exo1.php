 <?php /*
$chambre_est_sale= false;
 if ($chambre_est_sale== true){
  $ranger="range ta chambre !";
} else{
$ranger="ta chambre est propre, vis un peu !";
}
echo $ranger;
  */

/*$etatDelaChambre="immaculée";

if ($etatDelaChambre=="dégoutante") {
  $ranger="nettoie moi tout ça!";
}elseif ($etatDelaChambre=="sale") {
  $ranger="fais un peu de nettoyage !";
} elseif ($etatDelaChambre=="en ordre") {
  $ranger="tu es sans reproche !";
}elseif ($etatDelaChambre=="immaculée") {
  $ranger="Ne serais tu pas un peu maniaque ?";
} else {
  $ranger="tu es un maniaque !";
}
echo $ranger;*/

$heureDeLaJournee=03.20;

if ($heureDeLaJournee >= 5.00 AND $heureDeLaJournee <= 9.00) {
  $salutationSelonHeure = "Bonjour!";
}elseif ($heureDeLaJournee >9.00 AND $heureDeLaJournee <= 12.00) {
  $salutationSelonHeure = "Bonne journée";
}elseif ($heureDeLaJournee>12.00 AND $heureDeLaJournee <=16.00) {
  $salutationSelonHeure= "Bonne après-midi !";
}elseif ($heureDeLaJournee>16.00 AND $heureDeLaJournee <= 21.00) {
  $salutationSelonHeure = "Bonne soirée";
}else {
  $salutationSelonHeure= "Bonne nuit !";
}
 echo $salutationSelonHeure;
   ?>
/*tout séparer*/
