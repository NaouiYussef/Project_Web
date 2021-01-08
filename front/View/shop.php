<?php
include 'cartC.php';
require_once 'cartM.php';
$cartC=new cartC();
$list=$cartC->afficherallcart();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Connect Gym</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="../assets/css/clubs/clubs-homepage.css" rel="stylesheet" />
</head>

<body id="page-top" class="masthead" >
    <!-- Navigation-->
    <?php include "header.php"; ?>
    <!-- Masthead-->
  
    <div class="container" >

        <div class="row">

            <div class="col-lg-3">

                <br> <br>
              

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://www.onthegofitnesspro.com/wp-content/uploads/2020/04/motivation-gym-girl-sportswear-fitness-dumbbe-900x350.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://www.kickz.com/blog/wp-content/uploads/2017/03/PG1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://discount.grossiste-chinois-import.com/images/shorts_sport.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://media.bodyandfit.com/i/bodyandfit/gold-standard-100-whey-protein_Image_01?locale=fr-fr,en-gb,*" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="chekout.php?id=1">Gold Standard Whey</a>
                                </h4>
                                <h5>100dt</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                            <button data-product={{product.id}} data-action="add" class="btn btn-outline-secondary add-button update-cart" href="cartC.php" >add to cart</button>
                                
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://freepngimg.com/thumb/categories/627.png" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Running Shoes</a>
                                </h4>
                                <h5>150dt</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-outline-secondary add-button update-cart">add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://www.cdiscount.com/pdt2/1/1/9/1/700x700/mp09847119/rw/everlast-gants-en-cuir-musculation-mixte-unisexe.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Lifting Gloves</a>
                                </h4>
                                <h5>20dt</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-outline-secondary add-button update-cart">add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Four</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-outline-secondary add-button update-cart">add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Five</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-outline-secondary add-button update-cart">add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Six</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-outline-secondary add-button update-cart">add to cart</button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    
    <table class="table">
									
									<thead>
										<tr>
											<th style="width:35%;">Product Name</th>
											<th style="width:15%">Price</th>
                                            <th style="width:10%">Size</th>
                                            <th style="width:10%">quantity</th>
											<th  style="width:25%">Total</th>
											<th class="d-none d-md-table-cell" style="width:5%"> Actions</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$list=$cartC->afficherallcart();
										foreach($list as $u) {
                                            $total=0
									?>
										<tr>
											<td><?php echo $u['product_name']?></td>
											<td><?php echo $u['product_price'] ?></td>
											<td> <?php echo $u['product_size'] ?></td>
                                            <td> <?php echo $u['quantity'] ?></td>
                                            <td><?php echo number_format($u['quantity'] * $u['product_price'], 2);?>dt</td>
											<td class="table-action">
											<form method="POST">
												<input type="hidden" value=<?PHP echo $u['id']; ?> name="id">
												<span>
													<button class="btn btn-danger "formaction="SupprimerCart.php"><i class="fa fa-times-circle"></i></button>
													</span> 
													
												
											</form>	

											</td>
										</tr>
                                        <?php
        $total = $total + ($u['quantity'] * $u['product_price']);
                                        }
?> 
<tr>
    <td colspan="3" align="right">Total</td>
    <td align="right"><?php echo number_format($total, 2)?>dt</td>
    <td></td>
</tr>
<br/>

										</tbody>
										
								</table>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>

</html>