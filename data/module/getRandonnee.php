<?php
include('../config/config.php');
$nomDeRandonnee = $_POST['nomDeRandonnee'];
$depart = $_POST['depart'];
$description = $_POST['description'];
$score = $_POST['score'];
$photo = $_FILES['photos']['name'];
$photo_tmp = $_FILES['photos']['tmp_name'];
// $photo = time().'_'.$photo;
if(isset($_POST['Submit'])){
    $sql_add ="INSERT INTO tbl_randonnee(nomDeRandonnee,depart,description,score,photo )
            VALUE('".$nomDeRandonnee."','".$depart."','".$description."','".$score."','".$photo."')";
    mysqli_query($mysqli,$sql_add);
    move_uploaded_file($photo_tmp,'../../images/'.$photo);
    header('Location:../../index.php?action=gestion=contribuer');
}
?>