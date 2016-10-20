<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
    function dm()
        {
        alert("Please Login!!! you will be redirected to MENU");
        }
    </script>
    
    <meta charset="UTF-8">
    <title>Title page</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/fpr.css"/>
    
    <style>
        body{
            background-image: url("css/back.jpg");
        }
        .qwe{
            width:450px;
        }
        footer{
            margin-top:14%;
        }
        .login
{
	background-color:;
	font-size:25px;
	color:red;
    

	
}
        .po{
         font-size:30px;
        }
.signup
{
	background-color: ;
	font-size:25px;
	color:red;

	
}
    </style>
    <!--Let browser know website is optimized for mobile-->
    </head>

<body>
<main>

    <div class="row valign-wrapper">
        <div class="col s8">
            <a href="#"><img src="images/logos/logo_iiitv.png" width="80" height="80" class="circle responsive-img"> </a>
            <a href="#"><img src="images/logos/da.jpg" width="80" height="80" class="circle responsive-img"> </a>
            <a href="#"><img src="images/logos/gsfc.jpg" width="80" height="80" class="circle responsive-img"> </a>
            <a href="#"><img src="images/logos/GERMI.jpg" width="80" height="80" class="circle responsive-img"> </a>
            <a href="#"><img src="images/logos/TCS.jpg" width="80" height="80" class="circle responsive-img"> </a>
        </div>
        <div class="col s4">
            <form>
                <button type="button" class="waves-effect waves-light btn btn-sm z-depth-3"  data-toggle="modal" data-target="#myModal2">Login</button>
                <!--<button class="waves-effect waves-light btn  purple lighten-1 z-depth-3">SignUp</button>-->
                <!-- Trigger the modal with a button -->
                <button type="button" class="waves-effect waves-light btn lighten-1 z-depth-3" data-toggle="modal" data-target="#myModal1">Sign up</button>


                <input type="button" class="btn z-depth-3 waves-effect waves-light" value="MENU" onclick="dm()"/>

            </form>
        </div>
    </div>



    
<div class="row">
    <div class="col-xs-4">

    </div>
    <div class="col-xs-4">
        <img src="images/front2.jpg" alt="ambition_logo" width="456" height="322">
    </div>
    <div class="col-xs-4">

    </div>
</div>


</main>

<footer class="blue-grey">
            <button class="waves-effect waves-light btn btn-sm z-depth-3 right">IIITV Association</button>
            <button class="waves-effect waves-light btn btn-sm z-depth-3 right">Contact us</button>
            <button class="waves-effect waves-light btn btn-sm z-depth-3 right">Partners</button>
            <button class="waves-effect waves-light btn btn-sm z-depth-3 right">Team</button>
            <button class="waves-effect waves-light btn btn-sm z-depth-3 right">About us</button>
           <!-- <a class="teal-text text-darken-1 right" href="#!"><h4>About us</h4></a>-->

</footer>
<div>
<!-- Modal -->
					<div id="myModal1" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Signup</h4>
								</div>
								<div class="modal-body signup">
        
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
										<fieldset>
										<center><legend> Personal Information</legend></center>
										NAME  <center><input class="po" type="text" name="username" value="" placeholder="username"/></center></br>
										PASSWORD	<center><input class="po"  type="password" name="password" value="" placeholder="min 6 characters"/></center></br>
										CONFIRM PASSWORD<center><input class="po"  type="password" name="confirmpassword"value="" placeholder="same as above"></center></br>
										PHONE NUMBER <center><input class="po"  type="number" name="phone_no" value="+91" maxlength="10"></center></br>
										EMAIL ID <center><input class="po"  type="text" name="email" value="@iiitvadodara.ac.in"  size="30" ></center></br>
										<input class="po"  type="submit" name="submit" value="signup"/></br></br>
										
										</fieldset>
									</form>
								
		
		
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

					</div>
				</div>
				
				
				<div id="myModal2" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Login</h4>
								</div>
								<div class="modal-body login">
        
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
										<fieldset>
										<center><legend> Personal Information</legend></center>
										NAME  <center><input type="text" name="username" value="" placeholder="username"/></center></br>
										PASSWORD	<center><input type="password" name="password" value="" placeholder="min 6 characters"/></center></br>
	
										
										<input type="submit" name="login" value="login"/></br></br>
										
										</fieldset>
									</form>
								
		
		
								</div>
								<div class="modal-footer">
										<!--<p>
												Not yet registered?
											<button type="button" class="btn btn-info btn-lg btn-primary" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">click here</button>
										</p> -->
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

					</div>
				</div>
				
				
				
			</div>
			
		
		
	</div>


</div>
	
	
		<?php
		$username=$password=$phone_no=$email="";
	if(isset($_POST['submit']))
		{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$phone_no=$_POST['phone_no'];
		$email=$_POST['email'];
		
		
			$con= mysqli_connect("localhost","root","","hackathon");
			if(mysqli_connect_errno())
			{
				die("datbase coonection failed" . mysqli_connect_error() );
			}
			
		
			$query="INSERT INTO signup (username,password,phoneno,email) VALUES ('$username','$password','$phone_no','$email')";
			$result= mysqli_query($con,$query);
		
			mysqli_close($con);
		}
		?>
		
		
		
		
		
		<?php
		$username=$password="";
	if(isset($_POST['login']))
		{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
			
			$con=mysqli_connect("localhost","root","","hackathon");
			if(mysqli_connect_errno())
			{
				die("datbase coonection failed" . mysqli_connect_error() );
			}
			
			
		
		
		
			$query= "SELECT username,password FROM signup Where username='$username' and password='$password'";
			$result= mysqli_query($con,$query);
			
			$row=mysqli_fetch_assoc($result);
			{
				
				if($username==$row["username"]&&$password==$row["password"])
				{
				
				echo '<script>window.location="menu.html"</script>';
//					header('Location: http://localhost/project/project.html');
					exit();
					
				}	
				else{
				
                    echo "<script type='text/javascript'>
                    alert('Login Unsuccessful!!!');
                </script>";
				}
				
			}
			
	
			mysqli_close($con);
		}
		?>
		
			
		
	
		
		
		
		
	

		<script src="js/jquery.js"></script>
  <!--  <script src="js/bootstrap.js"></script>-->
		<script src="js/bootstrap-modal.js"></script>    
    
</body>


</html>