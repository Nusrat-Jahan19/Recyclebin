<!DOCTYPE html>
<html>
<head>
     
   <script src="https://kit.fontawesome.com/290a1a6c66.js" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="css/style.php " />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  
</head>	

<body>
	<header>
    <?php
  include('include/nav.php');  
  
?> 
    </header>

    
    <div class="banner">
        <div class="wrapper">
            <h1>Our Team</h1>
                <div class="team">
                    
                    <?php
                       $server_name= "localhost";
                       $db_username= "root";
                       $db_password= "";
                       $db_name= "adminpanel";

                       $connection= mysqli_connect($server_name,$db_username,$db_password);
                       $dbconfig= mysqli_select_db($connection, $db_name);

                       $query="SELECT *FROM teammember";
                       $query_run=mysqli_query($connection, $query);
                       $check_member=mysqli_num_rows($query_run)>0;

                       if($check_member)
                       {
                           while($row=mysqli_fetch_array($query_run))
                           {

                            ?>

                          <div class="col-lg-3 col-md-6 col-sm-6 info">   
                        <div class="team_member">
                            <div class="team_img">
                                <?php echo '<image src="assets/'.$row['images'].' " width="100px;" height="100px;" alt="image">'?>
                            </div>
                            <h3><?php echo $row['name']?></h3>
                            <p class="role"><?php echo $row['role']?></p>
                            <p  class="text-justify"><?php echo $row['description']?> </p>
                        </div>
                    </div>
                         
                            <?php

                             
                           }
                       }

                       else
                       {

                       }
                    ?>

                    
        </div>
    </div>
  </div>


    <footer class="footer">
  	    <div class="container">
  	 	    <div class="row">
  	 		    <div class="footer-col">
  	 			    <h4>Recycle Bin</h4>
  	 			    <ul>
  	 				    <li><a href="#">About Us</a></li>
  	 				    <li><a href="#">Our Services</a></li>
  	 				    <li><a href="#">Privacy Policy</a></li>
  	 			    </ul>
  	 		    </div>
  	 		    <div class="footer-col">
  	 			    <h4>Get Help</h4>
  	 			    <ul>
  	 				    <li><a href="#">Returns</a></li>
  	 				    <li><a href="#">Order Status</a></li>
  	 				    <li><a href="#">Payment Options</a></li>
  	 			    </ul>
  	 		    </div>
  	 		    <div class="footer-col">
  	 			    <h4>Contact Us</h4>
  	 			    <ul>
  	 				<li><a href="#"><i class="fa fa-phone"></i>01914389618</a></li>
            	    <li><a href="#"><i class="fa fa-envelope"></i>recyclebin@gmail.com</a></li>
            	    <li><a href="#"><i class="fa fa-home"></i>Dhaka,Bangladesh</a></li>>
  	 			    </ul>
  	 		    </div>
  	 		    <div class="footer-col">
  	 			    <h4>follow us</h4>
  	 			    <div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  
        <div class="container2"> 
            <p class="text-white" ;text-align="center"> ??2021 Copyright.All Rights Reserved</p>
        </div>
    </footer>

    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          
</body>
</html>