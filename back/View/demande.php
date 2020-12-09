<?PHP
include_once "../Controller/formulaireC.php";

$Client = new formulaireC();
$Client1 = new formulaireC();
$liste = $Client->afficherformulaire();
if (	
    isset($_GET['Id']) && 
    isset($_GET['option']))
{
   
$Client1->modifierRole($_GET['option'],$_GET['Id']);
echo '<script> alert("Demande accepté. Le role a était modifier.");</script>';
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
    <title>Tables - SB Admin</title>
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
 
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <?php require 'nav.php' ?>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="back.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                            .
                        </div>
                    </div>
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
                                            <th>Nom et Prenom</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>option</th>
                                            <th>Message</th>
                                            <th>Cv</th>
                                            <th>Id Client</th>
                                            <th></th>
                                            <th></th>
                                        </tr>

                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Identifiant</th>
                                            <th>Nom et Prenom</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>option</th>
                                            <th>Message</th>
                                            <th>Cv</th>
                                            <th>Id Client</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <style>
                                        td {
                                            max-width: 500px;
                                            overflow: hidden;
                                            overflow-wrap: break-word;
                                            text-overflow: ellipsis;
                                            
                                        }
                                        
                                    </style>
                                    <tbody>
                                        <?php foreach ($liste as $Client) { ?>
                                            <tr>


                                                <td><?PHP echo $Client['id']; ?></td>
                                                <td><?PHP echo $Client['nomprenom']; ?></td>
                                                <td><?PHP echo $Client['email']; ?></td>
                                                <td><?PHP echo $Client['telephone']; ?></td>
                                                <td><?PHP echo $Client['option']; ?></td>
                                                <td>
                                                    <?PHP echo $Client['message']; ?>
                                                </td>

                                                <td><img height="200px" src="../../front/View/<?PHP echo $Client['cv']; ?>"></td>
                                                <td><?PHP echo $Client['idClient']; ?></td>
                                                <td><a href="deleteformulaire.php?id=<?= $Client['id'] ?>" ><i class="fas fa-times-circle"></a></i></td>
                                                   <td> <a href="demande.php?Id=<?PHP echo $Client['idClient']; ?>&option=<?PHP echo $Client['option']; ?>"><i class="fas fa-check"></a></i></td>


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
    <script src="../assets/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>