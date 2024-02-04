<div id="main">
            <?php
            if(isset($_GET['gestion'])){
                $var = $_GET['gestion'];
            }else{
                $var ='';
            }
            if($var=='listrandonnee'){
                include("main/randonner.php");   
            }elseif($var=='contribuer'){
                include("main/contribuer.php");
            }elseif($var=='connexion'){
                include("main/connexion.php");
            }elseif($var=='randonner'){
                include("main/randonner.php");
            }elseif($var=='loginOUlogout'){
                include("main/session_login_logout.php");
            }

            else{
                include("main/acceuil.php");
                
            }
            ?>
        </div>