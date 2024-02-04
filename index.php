<!-- Nom et prénom: TRINH Thi Thanh Thuy
Numéro d'étudiante: 11919812
Binôme: 23 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Randonnées Rhône-Alpes</title>

</head>

<body>
    <div class="wrapper">
        <?php
        include("data/config/config.php");
        include("pages/header.php");
        include("pages/menu.php");
        include("pages/main.php");
        ?>
    </div>
    <!-- ckeditor pour le text de description -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>

</body>


</html>