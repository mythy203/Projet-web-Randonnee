<!-- Page acceuil: Liste des randonnées classées par ordre alphabétique
Liste des randonnées classées par ordre alphabétique -->
<?php
$sql_randonnee = "SELECT * FROM tbl_randonnee ORDER BY tbl_randonnee.nomDeRandonnee ASC";
$query_randonnee = mysqli_query($mysqli, $sql_randonnee);
?>

<h1>Liste des randonnées Rhône-Alpes </h1>
<p> Vous pouvez cliquer une randonnée ci-dessous et puis,
    elle change de <em>la page "randonner"</em> qui a le détail d'une randonnée sélectionnée </p>
<p>Si vous voulez contribuer une nouvelle randonnée, cliquez ici : <a href="index.php?gestion=connexion">Contribuer</a></p>
<p>Attention, il faut se connecter avec vos identifiants pour contribuer une nouvelle randonnée.</p>


<ul class="list_randonnee">
    <?php
    while ($row_randonnee = mysqli_fetch_array($query_randonnee)) {

    ?>
        <li>
            <a href="index.php?gestion=randonner&id_randonnee=<?php echo $row_randonnee['id_randonnee'] ?>">
                <img style="height: 70%;" src="../../images/<?php echo $row_randonnee['photo'] ?>">
                <p class="nom_randonnee"><?php echo $row_randonnee['nomDeRandonnee'] ?></p>
                <p class="adress_randonnee">Départ: <?php echo $row_randonnee['depart'] ?></p>
            </a>
        </li>
    <?php
    }
    ?>

</ul>