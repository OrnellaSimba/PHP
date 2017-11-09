
<form  action="traitement.php" method="get">

    <label for="age">Quel est votre age ?</label></br></br>
    <input type="number" name="age" id="age" placeholder="Ex:15"></br></br>


    <label for="genre">Quel est votre genre ?</label></br>

    <input type="radio" name="genre" value="feminin">Femme</br></br>
    <input type="radio" name="genre" value="masculin">Masculin</br></br>

    <label for="anglais">Parlez-vous anglais ?</label></br>
    <input type="radio" name="anglais" id="anglais" value="yes">yes</br></br>
    <input type="radio" name="anglais" id="anglais" value="no">no</br></br>

    <input type="submit" name="valider">

</form>
