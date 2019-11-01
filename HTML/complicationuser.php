<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Diabetes Complication| Diabetes Prediction System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

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

$a = $_SESSION['user'];
?>
    <!-- NAVBAR
    ================================================== -->

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
					<li class="has-child"><a href="#">Hello, <b><?php echo $a; ?></b></a>
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
		<h1 class="page-title"><center>LIST OF " DIABETES COMPLICATION"</center> <span class="title-under"></span></h1>
			<p class="page-description">
				<center>Below is the list of reading</center>
			</p>
			
		</div>

	</div>
<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					
					

						<div class="row">

<br><br>
  <?php
			$con=mysqli_connect("localhost","root","","diabetes");

			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			// SQL statement
			$result = mysqli_query($con,"SELECT * FROM info where section='complication'");
			//$ada = mysqli_num_rows($result);

			$v=1;
           
			if($row = mysqli_fetch_array($result)) 

			  {
				
				$a = $row['title'];
$b = $row['infoID'];
			  
 echo "<table align=center border=0  cellpadding=40 cellspacing=40  \n";
			  echo "<tr><th>Title <br><br></th><th>Menu<br><br></th></tr>\n";
			  
			  do{
				printf("<tr><td align=center>%s &nbsp;&nbsp;&nbsp;&nbsp;</td><td align=center>%s</td></tr>\n",
					   $row['title'],"<a href='complication2user.php?title=".$row['infoID']."'><u>Read Now</u></a>");

			   $v++;
			  }while($row=mysqli_fetch_array($result));
			  
			   
			  echo "</table>\n";
			  }//tutup if

			else
			  echo "<center><b>Sorry, there is no available information!</b></center>";  
			  

			mysqli_close($con);
			?>
	<br><br><br>
	<br><br><br>
	

                        </div>

                        <div class="clearfix"></div>
						</div></div></div>

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
                                    <strong>Diabetes Care</strong> 

is the leading charity that cares for, connects with and campaigns on behalf of every person affected by or at risk of diabetes. We provide information, help and peer support, so people with diabetes can manage their condition effectively.

Purpose this campaigns are to realised the people the impacts of DIABETES in their lives.

                                </p> 

                                <p>
                                   
                                </p>

                            </div>
                            
                        </div>

                    </div>

                    


                    <div class="col-md-4">

                        <div class="footer-col">

                      

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                               
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
        
    </footer>




       
        
       
    </body>
</html>
<?php ob_end_flush(); ?>
