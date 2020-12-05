
<link rel="stylesheet" href="test.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="navbar">
       
        <div class="right">
            <ul>
              <li>
                <a href="#">
                  <p>Coding<br> <span>Admin</span></p><img src="Profile.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                </a>
                 
                <div class="dropdown">
                    <ul>
                      <li><a href="#"><br><i class="fas fa-user"></i>Profile</a></li>
                      <li><a href="#"><i class="fas fa-sliders-h"></i>Settings</a></li>
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
