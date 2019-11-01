<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>What is Diabetes| Diabetes Prediction System</title>
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
$bmi=$_SESSION['bmi3'];
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

                    

                </div> <!-- /#navbar -->


              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->
		<h1 class="page-title"><center>"RESULT OF DIABETES PREDICTION"</center> <span class="title-under"></span></h1>
			<p class="page-description">
				<center>Below is result after answering the questionnaire</center>
			</p>
			
		</div>
	<br><br>
	</div>
	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

		
<?php
if(isset($_POST['answers']))
  {
  $j=$_POST["answers"];
  }
$sum=0;

foreach($_POST['answers'] as $answers)
{
  //do something with $item
    $sum=$sum+$answers;
}


  $o=$_POST["bmi"];
  $sum2=$sum+$o;


?>
		<form action="resultsave.php" method="post" class="contact-form ajax-form">

						<div class="row">
									       <div class="col-md-3 col-sm-6">
			
						<b>Total mark :</b>
                             <input type="number" name="mark" class="form-control" placeholder="" 
      value="<?php echo $sum2; ?>" readonly>
                        </div>
						 <div class="col-md-3 col-sm-6">
							<b>Your current BMI :</b>
                             <input type="number" name="bmi" class="form-control" placeholder="" 
      value="<?php echo $bmi; ?>" readonly>
                        </div>
						
					       <div class="col-md-3 col-sm-6">
						<b>Risk :</b>
                             <input type="text" name="risk" class="form-control" placeholder="" 
      value="<?php if ($sum2<7){
	
		echo " SMALL";
		
}
else if ($sum2<=11 ){

			echo "SLIGHTLY ELEVATED ";

}
else if ($sum2<=14)
{
			echo "MODERATE  ";
		
}
else if ($sum2<=20)
{
			echo "HIGH ";
		
}
else if ($sum2>20)
{
			echo "VERY HIGH";
		
}
 ?>" readonly>
 
				</div>
				  <div class="col-md-3 col-sm-6">
						<b>Probability :</b>
						 <input type="text" name="probability" class="form-control" placeholder="" 
      value=" <?php if ($sum2<7){
	
		echo " 1 IN 100 develops type 2 diabetes";
		
}
else if ($sum2<=11 ){

			echo "1 IN 25 develops type 2 diabetes ";

}
else if ($sum2<=14)
{
			echo "1 IN 6 develops type 2 diabetes ";
		
}
else if ($sum2<=20)
{
			echo "1 IN 3 develops type 2 diabetes ";
		
}
else if ($sum2>20)
{
			echo "1 IN 2 develops type 2 diabetes";
		
}
 ?>" readonly>
 
 
				</div>
				
							<br><br>	<br><br>
							 <div class="col-md-3 col-sm-6">
						<b>Recommendation :</b><br>
						</div>
						   <input type="text" name="recommendation" class="form-control" placeholder="" 
      value="
    <?php if ($sum2<7){
	
		echo " Please keep maintain your health by keep exercise. Always seek doctor advice";
		
}
else if ($sum2<=11 ){

			echo "Do more physical exercise and avoid sugary food and drinks ";

}
else if ($sum2<=14)
{
			echo "Stay away from smoking and avoid junk food and sugary food";
		
}
else if ($sum2<=20)
{
			echo "Exercise and do diet to avoid obesity. Seek the doctor to more advice ";
		
}
else if ($sum2>20)
{
			echo "Exercise and do diet to avoid obesity. Seek the doctor to more advice ";
		
}
 ?>" readonly>
 
 
				
      <br><br> <br><br> <br><br><b>
 <?php if ($sum2<=14){
	
		echo " *you
may have undiagnosed type 2 diabetes or be at
increased risk of developing type 2 diabetes.
Discuss your score and your individual risk with
your doctor. Committing to improving your lifestyle
may help reduce your risk of developing type 2
diabetes.";
		
}
else if ($sum2>=15 ){

			echo "*you are in the high risk group.See your doctor and ask to have a fasting blood
glucose test. Act now to prevent type 2 diabetes. ";

}

 ?></b>
							 <br><br>
						
                          <input type="submit" name="Submit" value="Back to homepage">
							
     
   		
                   

                  
					</form>	

<br><br>
 
	
	
	
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
