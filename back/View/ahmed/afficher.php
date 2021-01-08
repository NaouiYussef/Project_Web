<?php
    require_once '../Controller/feedbackC.php';

    $user =  new feedbackC();
    $user1 =  new feedbackC();
	$feedbacks = $user->afficherfeedback();

	if (isset($_GET['id'])) {
		$user1->supprimer($_GET['id']);
		header('Location:afficher.php');
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/style.css"> 

</head>

<body>
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>Identifiant</th>
                                                <th>FirstName</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>message</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            
                                        </thead>
                                        
                                        <tfoot>
                                            <tr>
                                            <th>Identifiant</th>
                                            <th>FirstName</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>message</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach($feedbacks as $user) { ?>
                                            <tr>
                                                   
                                                   
                                                   <td><?PHP echo $user['id']; ?></td> 
                                                   <td><?PHP echo $user['name']; ?></td>
                                                   <td><?PHP echo $user['email']; ?></td> 
                                                   <td><?PHP echo $user['phone']; ?></td> 
                                                   <td><?PHP echo md5($user['message']); ?></td> 
                                                   <td> <a href="afficher.php?id=<?PHP echo $user['id']; ?>">delete</a></td>
                                                   
                                                    
                                            </tr>
                                            <?PHP
                                              }
                                              ?>
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>


</html>