<?php
	include "../Controller/AccountC.php";
	include_once '../Model/account.php';

	$utilisateur1= new AccountC();
	
	
	if (
		isset($_POST["FirstName"]) && 
        isset($_POST["LastName"]) &&
        isset($_POST["Email"])  &&
        isset($_POST["Password"])  
       
    )
    {                                                                                                  
		
            $user = new account($_POST['FirstName'],$_POST['LastName'], $_POST['Email'],$_POST['Password']);
            $utilisateur1->modifier($user, $_GET['Id']);
       
            //header('refresh:5;url=index.php');
        }
        
        
      
     
    
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="../../../back/dist/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="bg-primary">

    <script src="controle_inscription.js">

    </script>
     
	
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Modify Account</h3>
                                </div>
                                <div class="card-body">
                                <?php
			if (isset($_GET['Id'])) {
				$user = $utilisateur1->recupererUtilisateur($_GET['Id']);
    
               
		?>
                                    <form name="f" action="" method="POST"  >
                                    <div class="form-group">

<label class="small mb-1" for="Id">Id</label>
<input class="form-control py-4"  type="text"
    name="Id" id="Id" value = "<?php echo $user['Id']; ?>" disabled/>
                                  
</div>
                                        <div class="form-row">
                                            
                                            <div class="col-md-6">
                                         

                                                <div class="form-group">

                                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                                    <input class="form-control py-4"  type="text"
                                                        name="FirstName" id="inputFirstName" value = "<?php echo $user['FirstName']; ?>" 
                                                       />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputLastName">Last Name</label>
                                                    <input class="form-control py-4" name="LastName" id="inputLastName" type="text"
                                                         value = "<?php echo $user['LastName']; ?>" onblur="nom_prenom()"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" name="Email" id="inputEmailAddress" type="email"
                                                 aria-describedby="emailHelp"
                                                value = "<?php echo $user['Email']; ?>" onblur="email()"/>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" type="password"
                                                        name="Password"  id="inputPassword" value = "<?php echo $user['Password']; ?>" readonly />
                                                </div>
                                            </div>
                                           

                                            <div class="form-group mt-4 mb-0">
                                                <input class="btn btn-primary btn-block"  type="submit" 
                                                  name="submit"  value="Modify Account">
                                            </div>
            
                                    </form>
                                    <?php } ?>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="back.php">Return to DashBoard</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
        

</body>

</html>