<?php
session_start();

?>
<div class="menu">
    <ul class="list-menu">

        <!--  barre de menu: Acceuil -->
        <li><a href="index.php">Accueil</a></li>

        <!-- barre de menu: connexion si l'utilisateur pas encore connecté -->
        <?php
        if (!isset($_SESSION['id'], $_SESSION['identifiant'])) {
        ?>
            <li>
                <form action="index.php?gestion=connexion" method="POST" name="connexion">
                    <input name="connexion" type="submit" value="Connexion">
                </form>
            </li>

        <?php }
        ?>

        <!-- bare de menu: identifiant + déconnexion quand l'utilisateur est connecté -->
        <?php
        if (isset($_SESSION['id'], $_SESSION['identifiant'])) {
        ?>
            <li><?php echo "Identifiant:" . $_SESSION['identifiant']; ?></li>
            <li>
                <form action="index.php?gestion=loginOUlogout" method="POST" name="deconnexion">
                    <input name="deconnexion" type="submit" value="Deconexion">
                </form>

            </li>
        <?php }
        ?>
    </ul>
</div>