
<link rel="stylesheet" href="../assets/css/test.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="navbar">
       
        <div class="right">
            <ul>
              <li>
                <a href="#">
                 <p><?php echo $_SESSION['FirstName'] ?> <br> </p> <img src="../assets/img/Profile.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                </a>
                 
                <div class="dropdown">
                    <ul>
                      <li><a href="Profile.php"><br><i class="fas fa-user" ></i>Profile</a></li>
                      
                    
                      <li><a href="signout.php"><i class="fas fa-sign-out-alt"></i>Signout</a></li>
                  </ul>
                </div>
                
              </li>
          </ul>
        </div>
    </div>
</div>	

<script>
	document.querySelector(".right ul li").addEventListener("click", function(){
		  this.classList.toggle("active");
	});
</script>
