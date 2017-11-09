
<!-- Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).
Méthode: GET Affiche un message différent selon la réponse au formulaire.

Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?" -->




<form method="get" action="traitement.php">

  <p>
    <label for = "age_utilisateur">Quel est votre âge ? </label>

    <input type="number" name="age"  id="age" placeholder="Ex: 15" maxlength="3"/>

    <input type="submit" value="valider"/>
  </p>

</form>
