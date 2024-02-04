<?php
    include('../config/config.php');
    $score = $_POST['score'];
    if (isset($_POST['Submit'])) {
        $sql_add_score = "INSERT INTO tbl_score(id_randonnee, score )
            VALUE('" . $id_randonnee . "','" . $score . "')";
        mysqli_query($mysqli, $sql_add_score);
        header('Location:../../index.php?gestion=randonner&id_randonnee=$id_randonnee');
    }

?>
