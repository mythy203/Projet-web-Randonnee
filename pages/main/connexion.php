<?php
// session_start();
if (isset($_SESSION['id'], $_SESSION['identifiant']))
    header("Location:../../index.php?gestion=contribuer");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        .wrapper-login {
            margin: 0 auto;
            width: 15%;
            padding: 0;
        }

        .table-login {
            margin-right: auto;
            margin-left: auto;
            text-align: center;
        }

        h3 {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3> <?php if (isset($_SESSION['newUser'])) {
                echo $_SESSION['newUser'];
                unset($_SESSION['newUser']);
            } ?></h3>
    <h3> <?php if (isset($_SESSION['message2'])) {
                echo $_SESSION['message2'];
                unset($_SESSION['message2']);
            } ?></h3>
    <h3> <?php if (isset($_SESSION['message1'])) {
                echo $_SESSION['message1'];
                unset($_SESSION['message1']);
            } ?></h3>
    <h3> <?php if (isset($_SESSION['message3'])) {
                echo $_SESSION['message3'];
                unset($_SESSION['message3']);
            } ?></h3>

            
    <div class="wrapper-login">

        <form action="/pages/main/session_login_logout.php" method="POST">
            <table class="table-login" border="1" style="text-align: center; border-collapse:collapse">
                <tr>
                    <td colspan="2">
                        <h4>Connectez-vous</h4>
                    </td>
                </tr>
                <tr>
                    <td>Identifiant</td>
                    <td><input type="text" name="identifiant"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="nouvel-utilisateur">
                        <label for="nouvel-utilisateur">Pas encore inscrit.e ?</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="connexion" value="Suivant"">
                    </td>
                </tr>
            </table>
    </div>
    </form>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>

</html>