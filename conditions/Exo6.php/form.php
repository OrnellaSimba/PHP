<!-- Crée un petit formulaire qui réagit à la note de l'étudiant.
Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
Si la note est égale à 10, affiche "Tout juste!"
Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
Si la note est 15, 16, 17, ou 18, affiche "Bravo!".
Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!". -->



<form class="" action="traitement.php" method="post">

  <label for="nom">Nom de l'étudiant</label></br></br>
  <input type="text" name="nom" placeholder="nom"></br></br>
    <label for="nom">Prenom de l'étudiant</label></br></br>
  <input type="text" name="prenom" placeholder="prenom"></br></br>
  <label for="nom">Points de l'étudiant</label></br></br>
  <input type="number" name="points" value="points"></br></br>
  <input type="submit" name="valider" >

</form>
