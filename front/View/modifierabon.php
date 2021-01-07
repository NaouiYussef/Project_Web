
<?php
	include_once "../controller/abonnementC.php";
	include_once '../Model/abonnement.php';

	$p= new abonnementC();
	
	if (
		isset($_POST["firstname"]) && 
        isset($_POST["username"])&&
        isset($_POST["lastname"]) && 
        isset($_POST["email"])&&
        isset($_POST["adress1"])&&
        isset($_POST["adress2"]) && 
        isset($_POST["pasword"])&&
        isset($_POST["country"])&&
        isset($_POST["stat"]) && 
        isset($_POST["zip"])

      
   
	){
        
        
            $abonnement=new abonnement($_POST["firstname"],$_POST["lastname"],$_POST["username"], $_POST["email"],$_POST["adress1"], $_POST["adress2"], $_POST["pasword"], $_POST["country"], $_POST["stat"], $_POST["zip"]);
            $p->modifierabon($abonnement,$_GET['username']);
            
            header('refresh:1;url=../back/tables.php');
             
        }
    ?>    
        <!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-all.css">
    <title>Gerer votre compte  </title>
    
</head>

<body>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <br>
                                <br>
                                <h2 class="pageheader-title"> MODIFIER  abonnement </h2>
                                 
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">abonnement</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Entrer les données</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <?php
if (isset($_GET['username'])){
    $abonnement=$p->recupererabonnement($_GET['username']);

                    ?>              
    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0"> abonnement </h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="needs-validation" action="" method="POST" novalidate="">
                                                
                                                
                                                    <div class="col-md-6 mb-3">
                                                        <label for="Equipe">first name</label>
                                                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="firstname" value="<?php echo $abonnement['firstname']; ?>">
                                                        
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="Name">last name </label>
                                                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastname" value="<?php echo $abonnement['lastname']; ?>" >
                                                        
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="marque">user name</label>
                                                    <div class="input-group">
                                                      
                                                        <input type="text" name="username" class="form-control" id="username" placeholder="username " value="<?php echo $abonnement['username']; ?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="reference">email</label>
                                                    <div class="input-group">
                                                      
                                                        <input type="text" name="email" class="form-control" id="email" placeholder="email"value="<?php echo $abonnement['email']; ?>" >
                                                        
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="model">adress1 </label>
                                                    <input type="text" name="adress1" class="form-control" id="adress1" placeholder="adress1" value="<?php echo $abonnement['adress1']; ?>" >
                                                   
                                                </div>
                                                <div class="mb-3">
                                                    <label for="couleurs">adress2</label>
                                                    <input type="text" name="adress2" class="form-control" id="adress2" placeholder="abonnement Name" value="<?php echo $abonnement['adress2']; ?>">
                                                    
                                                </div>
                                        
                                                
                                                <div class="mb-3">
                                                    <label for="taille">pasword <span class="text-muted"></span></label>
                                                    <input type="password" name="pasword" class="form-control" id="taille" placeholder="Taille"value="<?php echo $abonnement['pasword']; ?>">
                                                </div>
                                                <div class="mb-3">

                                                <div class="mb-3">
                                                    <label for="taille">country <span class="text-muted"></span></label>
                                                    <input type="text" name="country" class="form-control" id="taille" placeholder="Taille"value="<?php echo $abonnement['country']; ?>">
                                                </div>
                                                <div class="mb-3">

                                                <div class="mb-3">
                                                    <label for="taille">stat <span class="text-muted"></span></label>
                                                    <input type="text" name="stat" class="form-control" id="taille" placeholder="Taille"value="<?php echo $abonnement['stat']; ?>">
                                                </div>
                                                <div class="mb-3">

                                                <div class="mb-3">
                                                    <label for="taille">zip <span class="text-muted"></span></label>
                                                    <input type="text" name="pasword" class="form-control" id="taille" placeholder="Taille"value="<?php echo $abonnement['zip']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    
                                               
                                                 
                                                
                                                
                                                <hr class="mb-4">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Ajouter Maintenant</button>
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
               
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js-->
    <script src="assets/libs/js/main-js.js"></script>
</body>

 
</html>