<?php
    //session_start();
    if(!isset($_SESSION['id'],$_SESSION['identifiant'])) {
       header("Location:../../index.php?gestion=connexion");
  }
 ?>

<table >
<form method="POST" action="../../data/module/getRandonnee.php" enctype="multipart/form-data">
    <tr>
        <td>Nom de la randonnée:</td>
        <td><input required type="text" name="nomDeRandonnee"></td>
    </tr>
    <tr>
        <td>Adresse du point de départ:</td>
        <td><input required type="text" name="depart"></td>
    </tr>
    <tr>
        <td>Description de la randonnée:</td>
        <td><textarea required rows="10" name="description"></textarea></td>
    </tr>
    <tr>
        <td>Score de popularité:</td>
        <td><select required name="score">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select></td>
    </tr>
    <tr>
        <td>Photos:</td>
        <td><input required type="file" name="photos"></td>
    </tr>
    <tr>

    </tr>
    <tr>
        <td><input type="Submit" name="Submit"></td>
    </tr>

</form>

</table>