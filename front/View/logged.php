

	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="navbar">
       
        <div class="right">
            <ul>
              <li>
                <a href="#">
               
                 <p><?php echo $_SESSION['FirstName'] ?> <br> 
                <?php
                //1=client;2=gerant;3=coach;0=admin
                if($_SESSION['role']==2) {?>
Gérant<?php }
if($_SESSION['role']==3){?>
Coach<?php }
if($_SESSION['role']==0){?>
Admin
<?php } ?>
                
                </p> <img src="https://image.flaticon.com/icons/svg/236/236831.svg" width="40"><i class="fas fa-angle-down"></i>
                </a>
                 
                <div class="dropdown">
                    <ul>
                      <li><a href="Profile.php"><br><i class="fas fa-user" ></i>Profile</a></li>
                      
                      <?php if($_SESSION['role']==0){?>
                        <li><a href="../../back/View/back.php"><i class="fas fa-user-secret"></i>Back</a></li>
                        <?php } ?>
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
