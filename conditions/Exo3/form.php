
<!-- 3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.
Complète le formulaire de l'exercice précédent en ajoutant une deuxième question :
"Homme ou Femme?" (champ de type Radio).
Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin,
affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
Idem pour les autres tranches d'âge.
Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions. -->


<form action="traitement.php" method="get">

  <label for="age">Quel est votre age ?</label>
  <input type="number" name="age" id="age" placeholder="Ex:15">


  <label for="genre">Quel est votre genre ?</label></br>

  <input type="radio" name="genre" value="feminin">Femme</br>
  <input type="radio" name="genre" value="masculin">Masculin</br>


  <input type="submit" name="valider">

</form>
