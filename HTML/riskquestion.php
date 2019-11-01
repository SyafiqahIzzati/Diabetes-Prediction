<!DOCTYPE html>
<html class="no-js">
    <head>

		  </script>
		  
        <meta charset="utf-8">
        <title>DIABETES PREDICTION| WELCOME </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
		

    </head>

    <body>

<?php 
session_start();
if(!isset($_SESSION['user']))
echo ("<script>alert('Please log in!');document.location.href='login.php';</script>");

$b = $_SESSION['user'];
?>
    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <h1>DIABETES PREDICTION SYSTEM</li>
                           
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                 
                  
                </div>

               <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                   <li><a  href="home.php">HOME </a></li>
              				        <li class="has-child"><a  href="#">RISK PREDICTION</a>
                     <ul class="submenu">
                         <li class="submenu-item"><a href="riskprediction.php">RISK PREDICTION TEST </a></li>
					   <li class="submenu-item"><a href="riskH.php">RISK PREDICTION HISTORY </a></li>
					     </ul>
					
                    <li class="has-child"><a class="is-active" href="#">EDUCATION</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="diabetes.php">WHAT IS DIABETES </a></li>
                         <li class="submenu-item"><a href="symptomsuser.php">SYMPTOMS </a></li>
                         <li class="submenu-item"><a href="type1user.php">TYPE 1 DIABETES </a></li>
                         <li class="submenu-item"><a href="type2user.php">TYPE 2 DIABETES </a></li>
						 <li class="submenu-item"><a href="complicationuser.php">DIABETES COMPLICATION </a></li>
						 <li class="submenu-item"><a href="plan.php">FOOD PLANNING </a></li>
						 <li class="submenu-item"><a href="treatuser.php">TREATMENT FOR DIABETES </a></li>
						 <li class="submenu-item"><a href="newuser.php">NEWS OF DIABETES </a></li>
                      </ul>


                    </li>
					<li class="has-child"><a href="#">Hello, <b><?php echo $b; ?></b></a>
					     <ul class="submenu">
                         
						 <li class="submenu-item"><a href="userProfile.php">UPDATE PROFILE </a></li>
						 <li class="submenu-item"><a href="userpassword.php">CHANGE PASSWORD</a></li>
						 <li class="submenu-item"><a href="logout.php">LOG OUT </a></li>
                      </ul>

            
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

		<h1 class="page-title"><center>DIABETES PREDICTION QUESTION</center> <span class="title-under"></span></h1>
			<p class="page-description">
				<center>Below are questions for the Diabetes Prediction Questionnaire</center>
				<br>
				
				<?php
				 $w=$_POST["weight"];					  
  $h=$_POST["height"]; 
  
  $hm=$h/100;
  $bmi=$w/($hm*$hm);
  $bmi2= number_format((float)$bmi, 2, '.', '');
  $_SESSION['bmi3']= $bmi2;
  ?>
		<center><b>Your BMI is <?php echo $bmi2;?> kg/m2 </b></center>	
			</p>
			
		</div>

	</div>

<br><br><br>

    <form   id= "f1" method="post" action="result.php">
	
	<table cellpadding="0" width="500" border="0" align="center" >
		
	<tr><td  align="left"><b>1</b>	&nbsp;<b>Your body mass index is </b></td></tr>
	<tr><td align="left"><input type="radio" name="bmi" value="0" <?php if($bmi2< 25.00){ echo "checked";} else{ echo "disabled";}?>  /> Lower than 25kg/m2   </td></tr>
	<tr><td align="left"><input type="radio" name="bmi" value="1" <?php if($bmi2>=25.00){ echo "checked";}else{ echo "disabled";}?>  />  25-30 kg/m2   </td></tr>
	<tr><td align="left"><input type="radio" name="bmi" value="3" <?php if($bmi2>30.00){ echo "checked";} else{ echo "disabled";}?>  />  Higher than 30 kg/m2   </td></tr>

</tr></table><br><br>

<?php
$conn = mysqli_connect("localhost","root","","diabetes");
$sql = "SELECT * FROM questionnaire ";
$result = mysqli_query($conn,$sql )
or die ('Problem with query' . mysql_error());
 $r=2;

while ($row = mysqli_fetch_array($result)){ 

				$a = $row['idquestionnaire'];
				$b = $row['question'];
				$c = $row['answer1'];
				$d = $row['answer2'];
				$e = $row['answer3'];
				$f = $row['answer4'];
				$g = $row['answer5'];
				$h = $row['mark1'];
				$i = $row['mark2'];
				$j = $row['mark3'];
				$k = $row['mark4'];
				$l = $row['mark5'];
			
				
if(!empty($g)){
	echo '<table cellpadding="0" width="500" border="0" align="center" >
		
	<tr><td  align="left"><b>'.$r.'</b>	&nbsp;<b>'.$b.'</b></td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark1'].'" /> '.$c.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark2'].'" />   '.$d.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark3'].'" />   '.$e.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark4'].'" />   '.$f.'      </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark5'].'" />    '.$g.'    </td></tr>
</tr></table><br><br>';}

if(empty($e)){
	echo '<table cellpadding="0" width="500" border="0" align="center" >
		
	<tr><td  align="left"><b>'.$r.'</b>	&nbsp;<b>'.$b.'</b></td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark1'].'" /> '.$c.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark2'].'" />   '.$d.'    </td></tr>
	

</tr></table><br><br>';
}

else if(empty($f)){
	
	echo '<table cellpadding="0" width="500" border="0" align="center" >
		
	<tr><td  align="left"><b>'.$r.'</b>	&nbsp;<b>'.$b.'</b></td></tr>
	<tr><td align="left"><input type="radio" name="answers ['.$a.']" value="'.$row['mark1'].'" /> '.$c.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark2'].'" />   '.$d.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark3'].'" />   '.$e.'    </td></tr>
	
</tr></table><br><br>';
}

else if(empty($g)){
	echo '<table cellpadding="0" width="500" border="0" align="center" >
		
	<tr><td  align="left"><b>'.$r.'</b>	&nbsp;<b>'.$b.'</b></td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark1'].'" /> '.$c.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark2'].'" />   '.$d.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark3'].'" />   '.$e.'    </td></tr>
	<tr><td align="left"><input type="radio" name="answers['.$a.']" value="'.$row['mark4'].'" />   '.$f.'      </td></tr>

</tr></table><br><br>';}











$r++;

}
mysqli_close($conn); 
?>  

<center><input type="submit" value="Submit" ></center>
</form>




<br><br><br>



   


    


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <p>
                                    <strong>Diabetes Care</strong>  is the leading charity that cares for, connects with and campaigns on behalf of every person affected by or at risk of diabetes.

We provide information, help and peer support, so people with diabetes can manage their condition effectively. 
                                </p> 

                                <p>
                                   Purpose this campaigns are to realised the people the impacts of DIABETES in their lives.
                                </p>

                            </div>
                            
                        </div>

                    </div>

                    

                    


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Leave A Comment <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form">
                                    
                                    <div class="footer-form" >
                                    
                                       <form action="php/mail.php" method="post">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                        
                                    </form>

                                </div>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                izzatiPP @ copyrights 2017 - by nurul syafiqah izzati
            </div>
        </div>
        
    </footer> <!-- main-footer -->




   



    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
