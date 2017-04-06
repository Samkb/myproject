<?php
session_start();
include('../class/common.php');

if (isset($_POST['login'])) 
{
	
	$user = mysql_real_escape_string($_POST['Username']);
	$pass = mysql_real_escape_string($_POST['password']);
      $status=$_POST['s_login'];

      if ($status=='a') {
            # code...
      
	$res=$con->userLogin($user, $pass);
	if ($res)
	{
		?>
		<script>window.location="dashboard1.php"</script>
		<?php
	}
	else{
		?>
		<script>window.location="index.php?login='error"</script>
		<?php
	}
}
else
{
$res=$con->userEmployee($user, $pass);
      if ($res)
      {
            ?>
            <script>window.location="../cp_employee/employee_dashboard1.php"</script>
            <?php
      }
      else{
            ?>
            <script>window.location="index.php?login='error"</script>
            <?php
      }

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">


	<title>LOGIN</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!--external css-->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <div id="login-page">
      	<div class="container">


      		
      		<form class="form-login" method="post" action="">
      			<h2 class="form-login-heading">sign in now</h2>
      			<div class="login-wrap">

                         <div class="form-group">
                              <label for="select_login">Select Login</label><br>
                              <div class="radio-inline">
                              <input type="radio" name="s_login" value="a" > Admin<br>
                                    <input type="radio" name="s_login" value="e" checked=""> Employee<br>
                              </div>
                        </div>
                        <input type="text" class="form-control" placeholder="User ID" name="Username">

                        <br>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="form-group">

                        </div>


                        <?php
                        if (isset($_GET['login'])) 
                        {

                             ?>

                             <strong style="color: red;">Username or password incorrect</strong>
                             <?php

                       }
                       ?>
                       <span class="pull-right">


                        <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>

                  </span>
            </label>
            <input class="btn btn-theme" type="Submit" name="login" value="Login">

            <hr>

            <div class="registration">
             Don't have an account yet?<br/>
             <a class="" href="#">
                  Create an account
            </a>
      </div>

</div>

<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
  <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Forgot Password ?</h4>
           </div>
           <div class="modal-body">
                 <p>Enter your e-mail address below to reset your password.</p>
                 <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

           </div>
           <div class="modal-footer">
                 <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

           </div>
     </div>
</div>
</div>
<!-- modal -->

</form>	  	

</div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->

<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
<script>
     $.backstretch("assets/img/images/images.jpg", {speed: 500});
</script>


</body>


</html>
