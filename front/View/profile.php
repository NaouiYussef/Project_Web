<?php
session_start();
include "../Controller/AccountC.php";
include_once '../Model/account.php';

$utilisateur1 = new AccountC();
$utilisateur2 = new AccountC();
$userC = new AccountC();
if (
    isset($_POST["FirstName"]) &&
    isset($_POST["LastName"]) &&
    isset($_POST["Email"])  &&
    isset($_POST["Password"])
) {
    $user = new account($_POST['FirstName'], $_POST['LastName'], $_POST['Email'], $_POST['Password']);
    $utilisateur1->modifier($user, $_SESSION['user_id']);
header('location:index.php');
}

if (isset($_GET['demande']) == 'encours') {
    echo '<script> alert("Vous avez déjà envoyé une demande. Une réponse ne devrait pas tarder.");</script>';
}

if (isset($_GET['admin']) == 'acces') {
    echo '<script> alert("Accès non permis aux admin");</script>';}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <link href="../assets/css/error.css" rel="stylesheet" />
    <script src="../assets/js/controle_inscription2.js"></script>
    <link rel="stylesheet" href="../assets/css/profile.css">
    <title>Profile Settings Page</title>



</head>

<body>
 

    <div class="container-fluid main" style="height:100vh;padding-left:0px;">



        <div class="row align-items-center" style="height:100%">

            <div class="col-md-3 d-none d-md-block" style="height:100%">

                <div class="container-fluid nav sidebar flex-column">

                    <a href="#" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profil</a>

                    <a href="#" class="nav-link active"><i class="far fa-file-alt"></i> Abbonement</a>
                    <a href="role.php" class="nav-link active "><i class="fas fa-sync-alt"></i> Rejoignez-nous</a>
                    <a href="signout.php" class="nav-link active mb-auto"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                    <a href="index.php" class="nav-link active mb-auto"><i class="fas fa-sign-out-alt"></i> Exit</a>

                </div>

            </div>

            <div class="col-md-9">

                <div class="container content clear-fix">

                    <h2 class="mt-5 mb-5">Paramètre du profil</h2>

                    <div class="row" style="height:100%">

                        <div class="col-md-9">
                            <div class="container">



                                <?php

                                if (isset($_SESSION['user_id'])) {
                                    $user = $utilisateur1->recupererUtilisateur($_SESSION['user_id']);



                                ?>
                                    <form action="" method="POST">
                                    <?php if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                        <div class="col-md-3">

                                            <div href=# class="d-inline">
                                                <img src="<?php echo $user['image']; ?>" width=130px style="margin:0;"><br>
                                                <p class="pl-2 mt-2"><input type="file" id="image" name="image" disabled></p>
                                            </div>


                                        </div>
                                        <div class="groupe">

                                            <div class="form-group">

                                                <label for=fullName>Nom</label>
                                                <input type="text" class="form-control" id="LastName" name="LastName"  onblur="nom_prenom()" value="<?php echo $user['LastName']; ?>">

                                            </div>

                                            <div class="form-group">

                                                <label for=fullName>Prénom</label>
                                                <input type="text" class="form-control" id="FirstName" name="FirstName"  onblur="nom_prenom1()" value="<?php echo $user['FirstName']; ?>">

                                            </div>
                                            <div class="form-group">

                                                <label for=email>Email</label>
                                                <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $user['Email']; ?>">

                                            </div>
                                            <div class="form-group">

                                                <label for=pass>Password</label>
                                                <input type="password" class="form-control" id="myInput" name="Password"  onblur="password()" value="<?php echo $user['Password']; ?>">
                                                <input type="checkbox" onclick="myFunction()">Show Password

                                                <script>
                                                    function myFunction() {
                                                        var x = document.getElementById("myInput");
                                                        if (x.type === "password") {
                                                            x.type = "text";
                                                        } else {
                                                            x.type = "password";
                                                        }
                                                    }
                                                </script>
                                            </div>


                                            <div class="row mt-5">

                                                <div class="col">

                                                    <button type="submit" id="loginBtn" class="btn btn-primary btn-block">Save Changes</button>

                                                </div>

                                                <div class="col">

                                                    <button type="button" class="btn btn-default btn-block"><a href="index.php">Cancel</a></button>

                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                <?php
                                }
                                ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script href="../assets/js/profile.js"></script>

</body>

</html>