<?php 
session_start();
if(!isset($_SESSION['adminID']))
echo ("<script>alert('Please log in!');document.location.href='login.php';</script>");

$a = $_SESSION['adminID'];
ob_start();
include('db.php');

?>





<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Edit Info| Diabetes Prediction System</title>
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




 if(isset($_GET['title']))
  {
  $id=$_GET['title'];
  $getselect=mysql_query("SELECT * FROM info WHERE infoID=$id");
  while($ques=mysql_fetch_array($getselect))
  {
  $i=$ques['infoID'];
  $m=$ques['title'];					  
  $t=$ques['infoDetail']; 
  $p=$ques['section'];	
 
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

                   <li><a class="is-active" href="adminIndex.php">HOME </a></li>
            
				  
					
                    <li class="has-child"><a href="#">Risk Prediction</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="addQuestion.php">Add Question </a></li>
                         <li class="submenu-item"><a href="deleteQuestion.php">Delete Question </a></li>
                         <li class="submenu-item"><a href="viewQuestion.php">View Question </a></li>
                         <li class="submenu-item"><a href="editQuestion.php">Edit Question </a></li>
                      </ul>
					  
					</li>
					
					<li class="has-child"><a href="#">Info</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="addInfo.php">Add Information </a></li>
                         <li class="submenu-item"><a href="deleteInfo.php">Delete Information </a></li>
                         <li class="submenu-item"><a href="viewInfo.php">View Information </a></li>
                         <li class="submenu-item"><a href="editInfo.php">Update Information</a></li>
                      </ul>
					  
					</li>
						<li class="has-child"><a href="#">Responds</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="newMessage.php">Unread Respond </a></li>
                         <li class="submenu-item"><a href="inbox.php">Inbox </a></li>
                       
                      </ul>
					  
					</li>
						<li class="has-child"><a href="#">User</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="user.php">List of User </a></li>
                         <li class="submenu-item"><a href="userResult.php">Users Result </a></li>
                       
                      </ul>
					  
					</li>	<li class="has-child"><a href="#">Admin</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="newAdmin.php">Add New Admin </a></li>
                        
                       
                      </ul>
					  
					</li>
					
					<li class="has-child"><a href="#">Hello, <b><?php echo $a; ?></b></a>
					     <ul class="submenu">
                         
						 <li class="submenu-item"><a href="updateProfile.php">UPDATE PROFILE </a></li>
						 <li class="submenu-item"><a href="changePassword.php">CHANGE PASSWORD</a></li>
						 <li class="submenu-item"><a href="logoutAdmin.php">LOG OUT </a></li>
                      </ul>

            
                  </ul>
                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

	<h1 class="page-title"><center> EDIT INFORMATION</center> <span class="title-under"></span></h1>
		
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">EDIT INFORMATION FORM <span class="title-under"></span></h2>

				<align="left"><form name="file" action="editinfo2.php" method="post" >
		
 
	
   
  <b> InfoID:</b>	<input type="number" name="id" value= "<?php echo $i; ?>" readonly>
  
  
<br><br><br>
	
   
  <b> Title:</b>	<input type="text" name="title" value=" <?php echo $m; ?>" >
		
			
			
			
  <br><br><br>

  
  <b>Section:</b> <select name="section">
  <option value="what" <?php if ($p == 'what')  echo 'selected = "selected"'; ?>>What is Diabetes?</option>
  <option value="symptom" <?php if ($p == 'symptom')  echo 'selected = "selected"'; ?>>Symptoms</option>
  <option value="type1" <?php if ($p == 'type1')  echo 'selected = "selected"'; ?>>Type 1 Diabetes</option>
  <option value="type2" <?php if ($p == 'type2')  echo 'selected = "selected"'; ?>>Type 2 Diabetes</option>
   <option value="complication" <?php if ($p == 'complication')  echo 'selected = "selected"'; ?>>Diabetes Complication</option>
    <option value="food" <?php if ($p == 'food')  echo 'selected = "selected"'; ?>>Food Planning</option>
	 <option value="treatment"<?php if ($p == 'treatment')  echo 'selected = "selected"'; ?>>Treatment For Diabetes</option>
	  <option value="news" <?php if ($p == 'news')  echo 'selected = "selected"'; ?>>News of Diabetes</option>
</select>

   <br><br><br>
  <b> Description/Details:</b>
   
                                            <textarea name="description" class="form-control"  ><?php  echo $t; ?></textarea>
  <br>  
  

   
   
     <button type="submit" name="update" value="Update" id="inputid1">Edit Question</button>
   
   
   
</form>
</center>

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

