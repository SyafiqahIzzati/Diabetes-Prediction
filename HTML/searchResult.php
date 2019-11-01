<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    
     
    mysql_select_db("diabetes") or die(mysql_error());
  
     
     
     
?>


<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>List Of Users| Diabetes Prediction System</title>
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

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: center;
}
</style>
    </head>
    <body>
	<?php 

session_start();
if(!isset($_SESSION['adminID']))
echo ("<script>alert('Please log in!');document.location.href='login.php';</script>");

$a = $_SESSION['adminID'];
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
		<h1 class="page-title"><center>LIST OF USERS"</center> <span class="title-under"></span></h1>
			<p class="page-description">
				<center>Below is the list of user</center>
			</p>
			
		</div>
		<center><form action="search.php" method="get">
  Search User:
  <input type="search" name="search">
  <input type="submit" value="submit">
</form></center>

	</div>
<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

					
					

						<div class="row">


<br><br><center>
  
			<?php
    $query = $_GET['search']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM user
            WHERE (`email` LIKE '%".$query."%') OR (`firstName` LIKE '%".$query."%') OR (`lastName` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		

        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
          echo "<table><tr><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>Email</b></td><td><b>Gender</b></td><td><b>Menu</b></td></tr>";
            while($results = mysql_fetch_array($raw_results)){
             echo "<tr>";
        echo "<td>".$results['firstName']."</td>";
        echo "<td>".$results['lastName']."</td>";
		 echo "<td>".$results['email']."</td>";
		 		 echo "<td>".$results['gender']."</td>";
				 		 echo "<td><a href='sej.php?title=".$results['email']."'><img border='0' alt='W3Schools' src='viewicon.jpg' width='60' height='60'></a></td>";
        echo "</tr>";
         
            }
                echo "</table>";
        }
        else{ // if there is no matching rows do following
           
			echo ("<script>alert('No results');document.location.href='userResult.php';</script>");
        }
         
    }
    else{ // if query length is less than minimum
      
					echo ("<script>alert('Minimum length is 3');document.location.href='userResult.php';</script>");
    }
?>
			
			</center>
	<br><br><br>
	<br><br><br>

<br><br><br><br>
                        </div>

                        <div class="clearfix"></div>
						</div></div>

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
