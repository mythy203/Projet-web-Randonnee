<h1>Page d'une randonnée </h1>

<?php
$sql_uneRandonnee = "SELECT * FROM tbl_randonnee WHERE tbl_randonnee.id_randonnee='$_GET[id_randonnee]'LIMIT 1 ";/**/
$query_uneRandonnee = mysqli_query($mysqli, $sql_uneRandonnee);
while ($row_uneRandonnee = mysqli_fetch_array($query_uneRandonnee)) {
    $id_randonnee = $row_uneRandonnee['id_randonnee'];


?>
    <div class="wrapperDetail">
        <div class="photoRandonnee">
            <img width: 100% src="../../images/<?php echo $row_uneRandonnee['photo'] ?>">
        </div>
        <div class="detailRandonnee">
            <h3><?php echo $row_uneRandonnee['nomDeRandonnee'] ?></h3>
            <p class="titre-une-randonnee">Adresse du point de départ: </p> <?php echo $row_uneRandonnee['depart'] ?>
            <p class="titre-une-randonnee">Description: </p> <?php echo $row_uneRandonnee['description'] ?>


        </div>
        <div class="scoreRandonnee">
            <h3>Score de popularité:</h3>
            <!-- Create avis 5 stars -->
            <?php
            $sql_score = "SELECT * FROM tbl_score WHERE id_randonnee=" . $id_randonnee . "";/**/
            $query_score = mysqli_query($mysqli, $sql_score);
            $row_score = mysqli_fetch_array($query_score);
            $rating = $row_score['score'];
            // Rating
            $query_rating = "SELECT ROUND(AVG(score), 1) as numRating FROM tbl_score WHERE id_randonnee=" . $id_randonnee;
            $avgresult = mysqli_query($mysqli, $query_rating);
            $fetchAverage = mysqli_fetch_array($avgresult);
            $numRating = $fetchAverage['numRating'];
            if ($numRating <= 0) {
                $numRating = "Not ratings given.";

            ?>
            <?php
            }

            ?>


            <ul class="list-inline" title="Average Rating">

                <?php for ($count = 1; $count <= 5; $count++) : ?>
                    <?php if ($count <= round($numRating)) {
                        $color = 'color:#ffcc00;';
                    } else {
                        $color = 'color:#ccc;';
                    } ?>
                    <li title="Score de popularité" 
                    id="{{$id_randonnee}} - {{$count}} " 
                    data-index="{{$count}}" 
                    data-randonnee_id="{{$id_randonnee}}" 
                    data-score="{{round($numRating)}}" 
                    class="score"
                    style="cursor: pointer; color:<?php echo $color; ?>;  font-size:30px;">
                        &#9733;

                    </li>
                <?php endfor; ?>


            </ul>

             <!-- Afficher la moyenne notes d'une randonnée -->
            <h4 style="color:red;"> <?php echo 'Moyenne des notes: ' . $numRating . '/5 ' ?></h4>
            <?php echo round($numRating) ?>

            <form><input type="Submit" name="Submit"></form>


        </div>


    </div>


<?php
}

?>