<?php 
session_start();
if(!isset($_SESSION['adminID']))
echo ("<script>alert('Please log in!');document.location.href='login.php';</script>");

$a = $_SESSION['adminID'];
ob_start();
include('db.php');
if(isset($_GET['id']))
{
  $studentID=$_GET['id'];
  if(isset($_POST['id']))
  {
	    $i=$_POST["idquestionnaire"];
   $m=$_POST["question"];					  
  $t=$_POST["mark1"]; 
  $p=$_POST["answer1"];	
  $q=$_POST["answer2"];
  $u=$_POST["mark2"];
  $r=$_POST["answer3"];
  $w=$_POST["mark3"];
  $s=$_POST["answer4"];
   $z=$_POST["mark4"];
  $v=$_POST["answer5"];
$y=$_POST["mark5"];
  
  $update=mysql_query("UPDATE questionnaire SET 
  
      question='$m',
	  answer1='$p',
	  answer2='$q',
	  answer3='$r',
	  answer4='$s',
	  answer5='$v',
	  mark1	='$t',
	  mark2='$u',
	  mark3='$w',
	  mark4='$z',
	  mark5='$y'
	  
		WHERE idquestionnaire='$i'")or die();
  if($update)
  {
  $msg="Successfully Updated!!";
  header('Location:editQuestion.php');
  }
}
}  //update ends here
ob_end_flush();
?>





<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>User Respond| Diabetes Prediction System</title>
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




 if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM respond WHERE respondID=$id");
  while($ques=mysql_fetch_array($getselect))
  {
	$h=$ques['respondID'];  
  $i=$ques['name'];
  $m=$ques['email'];					  
 
  $p=$ques['feedback'];	
  $q=$ques['time'];

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

                    

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

	
			
		</div>

	</div>


	

					<form action="tukar.php" method="post" class="contact-form ajax-form">

						<table align="center"><tr><td>
								
						<h3><b>From :</b></h3>
        <?php echo $m; ?>
                       
						</td></tr>
						
		
				<tr><td>			
							<h3><b>message:</b></h3></td></tr>
					<tr><td>		  Hello Admin,</td></tr>
	                     <tr><td>      <?php echo $p; ?></td></tr>
							<tr><td>   <?php echo $i; ?>,</td></tr>
							   
							   
							
							 
							     <tr><td>   <h6> <?php echo $q; ?></td></tr></h6>
							
								 <br><br>
								    <tr><td>   </td></tr>
									 <tr><td>   </td></tr>
								 <tr><td>	    <a  href="tukar.php?id=<?php echo $h; ?>"> Back<a>
							</td></tr>
	                   
</table>
	   
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
                     


                         <div class="form-group col-md-3">
                         
							
                        
 
                           
					
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>
<?php } } ?>
			
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
                    izzatiPP @ copyrights 2017 - by nurul syafiqah izzati
            </div>
        </div>
        
    </footer>




       
        
       
    </body>
</html>

