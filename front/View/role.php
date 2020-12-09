<?php 
session_start();
include "../Controller/formulaireC.php"; 
$client= new formulaireC;

if($client->chercherId($_SESSION['user_id'])==0)
{

header('Location:profile.php?demande=encours');

}
if($_SESSION['role']==0)
{

	
	
	header('Location:profile.php?admin=acces');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Demande</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/form/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/form/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form"  action="ajoutformulaire.php" method="POST">
				<span class="contact100-form-title">
					Envoyer un formulaire
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Nom et prénom*</span>
					<input class="input100" type="text" name="nomprenom" placeholder="Enter Your Name" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="email" name="email" placeholder="Enter Your Email " required >
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Téléphone*</span>
					<input class="input100" type="text" name="telephone" placeholder="Enter Number Phone" required>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Option*</span>
					<div>
						<select class="js-select2" name="option" >
							<option>Choisir votre domaine</option>
							<option>Gérant d'une salle</option>
							<option>Coach</option>
							<option>Autre</option>
						</select>
						
						<div class="dropDownSelect2"></div>
						
					</div>
				</div>

		

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Laissez un message..." required></textarea>
				</div>

				<span class="label-input100">Joindre un CV</span>
					<input class="input100" name="cv" type="file" >
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Envoyez
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="../assets/css/form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/css/form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/css/form/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/css/form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/css/form/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="../assets/css/form/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/css/form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/css/form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../assets/css/form/vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="../assets/css/form/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
