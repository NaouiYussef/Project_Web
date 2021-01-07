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
    <?php include "../controller/GymC.php" ?>
        
   
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
                                <h2 class="pageheader-title"> AJOUTER UNE SALLE DE SPORT </h2>
                                 
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Votre Salle </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Entrer les données</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0"> Salle </h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="needs-validation" name="inscription" action="Gym.php" method="POST" novalidate="">
                                                
                                                   
                                                    <div class="col-md-6 mb-3">
                                                        <label for="Name">Gym Adress :</label>
                                                        
                                                        <input type="text" name="GymAdress" class="form-control" id="GymAdress" placeholder="gym adress" value="" required="">
                                                        
                                                    </div>
                                               
                                                <div class="mb-3">
                                                    <label for="marque">Gym ID</label>
                                                    <div class="input-group">
                                                      
                                                        <input type="number" name="GymId" class="form-control" id="GymId" min="1" max="99999999" minlength="8" maxlength="8" placeholder="gym id " required value="">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="model">Gym capacity </label>
                                                    <input type="number" name="GymCapacity" class="form-control" id="GymCapacity" placeholder="gym capacity">
                                                   
                                                </div>
                                                <div class="mb-3">
                                                    <label for="couleurs">Gym Email</label>
                                                    <input type="email" name="GymEmail" class="form-control" id="GymEmail" placeholder="Peter.houston@yahoo.fr" required="">
                                                    
                                                </div>
                                        
                                               
                                                <div class="mb-3">
                                                    <label for="prix">Gym number</label>
                                                    <div class="input-group">
                                                      
                                                        <input type="number" name="GymNum" class="form-control" id="GymNum" placeholder="+216 " required="">
                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="prix">Gym Name</label>
                                                        <div class="input-group">
                                                          
                                                            <input type="text" name="GymName" class="form-control" id="GymName" placeholder="gym name " >
                                                            
                                                        </div>
                                                <div class="mb-3">
                                                    <label for="taille">Gym Pictures <span class="text-muted"></span></label>
                                                    <input type="text" name="GymPics" class="form-control" id="GymPics" placeholder="upload">
                                                </div>
                                                <div class="mb-3">
                                                                                                  </div>
                                                
                                               
                                                 <h4 class="mb-3">image </h4>
                                                <div class="col-md-3 mb-3">
                                                <input type = "file" name = "imgP" ></div>
                                                <hr class="mb-4">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Now</button>
                                            </form>
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
    <script src="app.js"></script>
</body>

 
</html>