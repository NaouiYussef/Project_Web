
<?php
	include_once "../controller/GymC.php";
	include_once "../Model/Gym.php";

	$p= new gymC();
	var_dump($_POST["GymCapacity"]);
	if (
		isset($_POST["GymAdress"]) && 
        isset($_POST["GymCapacity"])&&
        isset($_POST["GymId"]) && 
        isset($_POST["GymEmail"])&&
        isset($_POST["GymNum"])&&
        isset($_POST["GymName"]) && 
        isset($_POST["GymPics"])
        
      
   
	){
        
        
            $gym=new gym($_POST["GymAdress"],$_POST["GymId"],$_POST["GymCapacity"],$_POST["GymEmail"],$_POST["GymNum"],$_POST["GymName"],$_POST["GymPics"]);
            $p->modifierGym($gym,$_GET['GymId']);
            
            //header('refresh:1;url=../back/tables.php');
             
        }
    ?>    
        <!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="../assets/css/style.css" rel="stylesheet">
   
    <link rel="stylesheet" href="../assets/css/fontawesome-all.css">
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
                                <h2 class="pageheader-title"> MODIFIER  gym </h2>
                                 
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">gym</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Entrer les données</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <?php
if (isset($_GET['GymId'])){
    $gym=$p->recupererGym($_GET['GymId']);

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
                                            <h4 class="mb-0"> Gym </h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="needs-validation" action="" method="POST" novalidate="">
                                                
                                                
                                                    <div class="col-md-6 mb-3">
                                                        <label for="GymAdress">Gym Adress</label>
                                                        <input type="text" name="GymAdress" class="form-control" id="GymAdress" placeholder="GymAdress" value="<?php echo $gym['GymAdress']; ?>">
                                                        
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="GymId">Gym ID :</label>
                                                        <input type="text" name="GymId" class="form-control" id="GymId" placeholder="GymId" value="<?php echo $gym['GymId']; ?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="GymCapacity">Gym Capacity</label>
                                                    <div class="input-group">
                                                      
                                                        <input type="text" name="GymCapacity" class="form-control" id="GymCapacity" placeholder="GymCapacity " value="<?php echo $gym['GymCapacity']; ?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="GymEmail">Gym Email</label>
                                                    <div class="input-group">
                                                      
                                                        <input type="text" name="GymEmail" class="form-control" id="GymEmail" placeholder="GymEmail"value="<?php echo $gym['GymEmail']; ?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="GymNum">Gym number </label>
                                                    <input type="text" name="GymNum" class="form-control" id="GymNum" placeholder="GymNum" value="<?php echo $gym['GymNum']; ?>">
                                                   
                                                </div>
                                                <div class="mb-3">
                                                    <label for="GymName">Gym Name</label>
                                                    <input type="text" name="GymName" class="form-control" id="GymName" placeholder="Gym Name" value="<?php echo $gym['GymName']; ?>">
                                                    
                                                </div>
                                        
                                                
                                                <div class="mb-3">
                                                    <label for="GymPics">Gym Pictures <span class="text-muted"></span></label>
                                                    <input type="text" name="GymPics" class="form-control" id="GymPics" placeholder="Taille"value="<?php echo $gym['GymPics']; ?>">
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