
<?php 
session_start();
if(!isset($_SESSION['adminID']))
echo ("<script>alert('Please log in!');document.location.href='login.php';</script>");

$a = $_SESSION['adminID'];
ob_start();
include('db.php');
ob_end_flush();
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Change Password| Diabetes Prediction System</title>
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




  $getselect=mysql_query("SELECT * FROM admin WHERE adminID='$a'");
  while($ques=mysql_fetch_array($getselect))
  {
  $i=$ques['adminID'];
  $m=$ques['adminName'];					  
  $t=$ques['adminPassword']; 
  $p=$ques['adminEmail'];	
  $q=$ques['noPhone'];
 
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
                            <li><h1>DIABETES PREDICTION SYSTEM</h1> </li>
                            
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>

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

                    
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->




		
			
		</div>

	</div>

	<div class="main-container fadeIn animated">
	
	
	

		<div class="container">

			<div class="row">

				<div class="col-md-4 col-md-offset-1 col-contact">
				
				

					<h2 class="title-style-2">Change Password <span class="title-under"></span></h2>

					<form action="pswd.php" method="post" class="contact-form ajax-form">
						  <div class="form-group">

						
	                         <b> Enter Existing Password*:</b>  <input type="password" name="pswdasal" class="form-control"  placeholder="Existing Password*" required>
	                       </div>						 <div class="form-group" >

						
	                     <b> New Password *:</b>    <input type="password" name="baru1" class="form-control" placeholder="New Password*"    value="" required>
	                       </div>						   <div class="form-group">

						
	                     <b> Re-enter new Password* : </b>    <input type="password" name="baru2" class="form-control" placeholder="Re-enter New Password*"      value="" required>
	                       </div>						 
						
							
							
							
							
							
							
							
							
							
							
					

                       
                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Change Password</button>
                        </div>
							<div class="form-group">
                            <a button type="submit" href="adminIndex.php"class="btn btn-primary pull-right">Cancel</button></a>
                        </div>
                        <div class="clearfix"></div>

					</form>
				

				</div>

			<?php  } ?>	
				 <br>
				 <br>
				 <br>
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

	

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
                © 2017 ISMSK(PP) BUMBLEBEE . All Rights Reserved.
            </div>
        </div>
        
    </footer>




       
        
       
    </body>
</html>
<?php ob_end_flush(); ?>

