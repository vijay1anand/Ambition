<?php
// Start the session
session_start();
?>

<html>

<head>
		

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title> IIITV POLLING </title>
	<link rel="stylesheet" type="text/css" href="" />
<style>
.butt
{
margin-left:20%;
margin-top:5%;	
	
}
.butt2
{
	margin-left:60%;
margin-top:-24%;	
	
}
body
{
	
	background-color:lightgrey;
	
}
h1
{
	padding-top:5%;
	text-align:center;
	color:green;
	
}
.col
{
	margin-top:-5%;
	background-color:lightblue;
}
.bl
{
	background-color:lightblue;
	
}
.bl2
{
	font-size=20px;
	
}
    .bt3{
    margin-left:90%;
    }    
</style>

</head>

<body>
	
	<div class="col">
	<h1> VOTER PORTAL </h1>
	<cite><center>"Right To Vote" </center></cite>
        <a href="f_index.php"><div class="bt3"> <button type="button" class="btn btn-info btn-lg ">MENU</button></div></a>
	<cite><center>Its time to show your presence,give your valuable vote to who "DESERVE" it</center></cite></br></br>
    
	</div>
	<?php
	$username="";
	if(isset($_POST['check']))
		{
			
		$username=$_POST['username'];
		$password=$_POST['password'];
			$_SESSION["user"] = $username;
			//echo $_SESSION["user"];
			
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
				
				echo "<script type='text/javascript'>
                    alert('YOU ARE REGISTERED, YOU CAN VOTE !!!');
                </script>";
				
				
			
					
				}	
				else{
				echo "<script type='text/javascript'>
                    alert('SORRY!!!!! YOU ARE NOT REGISTERED, PLEASE REGISTER  !!!');
                </script>";
				echo '<script>window.location="f_index.php"</script>';
				
				}
				
			}
			
			
			mysqli_close($con);
		}
		?>
	
	
	
	<div class="container-fluid">
			<div class="row">
				
				<!-- Trigger the modal with a button -->
<div class="butt "><button type="button" value="hec" name="hec" class="btn btn-info btn-lg btn-warning" data-toggle="modal" data-target="#hec">HEC COMMITTEE</button></br></br></br></br></br>
				<button type="button" class="btn btn-info btn-lg btn-warning" data-toggle="modal" data-target="#sports">SPORTS COMMITTEE</button></br></br></br></br></br>
				<button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#transport">TRANSPORT COMMITTEE</button></div></br>
<div class="butt2"><button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#mess">MESS COMMITTEE</button></br></br></br></br></br>
					<button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#maintain">MAINTAINENCE COMMITTEE</button></br></br></br></br></br>
				<button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#cultural">CULTURAL COMMITTEE</button></div>
				</div>
				</div>
 
				
	</div>		
	
	<!--  HEC COMITTEE CODE -->		
	
	<!-- Modal -->
	
					<div id="hec" class="modal fade" role="dialog">
					
					
					<?php
					
			$con= mysqli_connect("localhost","root","","hackathon");
			if(mysqli_connect_errno())
			{
				die("datbase coonection failed" . mysqli_connect_error() );
			}
			
				
			$query= "SELECT name FROM hec";
			$result= mysqli_query($con,$query);
			$name1="";
			$row=mysqli_fetch_assoc($result);
			$name1=$row["name"];
			
			
			//mysqli_close($con);
		
		?>
					
					
					
						<div class="modal-dialog">
									
						<!-- Modal content-->
							<div class="modal-content bl">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><center><b>HOSTEL EXECUTIVE COMMITTEE</b></center></h4>
								</div>
								<div class="modal-body">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input type="radio" name="nominated" value="<?php echo $name1;?>" ><b><font size="4"><?php echo "  ".ucwords($name1);
                             $row=mysqli_fetch_assoc($result);
			                 $name1=$row["name"];
							?> </font></b></br>
							<input type="radio" name="nominated" value="<?php echo $name1;?>"><b><font size="4"><?php echo " ".ucwords($name1);
                             $row=mysqli_fetch_assoc($result);
			                 $name1=$row["name"];
							?></font></b></br>
							<input type="radio" name="nominated" value="<?php echo $name1;?>"><b><font size="4"><?php echo "   ".ucwords($name1);?> </font></b><br><br>
							
							<input type="submit" name="vote" value="vote"/></br> 
							
							
			</form> 
								
		
		
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

				</div> 
				<!--------------modal id is closed here--->
				<?php
				mysqli_close($con);
				?>
	
			
	
	
			<?php
			
			$con= mysqli_connect("localhost","root","","hackathon");
			if(mysqli_connect_errno())
			{
				die("datbase coonection failed" . mysqli_connect_error() );
			}
			
			if(isset($_POST['vote']))
			{
						$x= $_SESSION["user"];
						
						$query= "SELECT flag FROM hecstud WHERE name='$x'";
						$result=mysqli_query($con,$query);
						
						$row=mysqli_fetch_assoc($result);
						
					
				
						if($row["flag"]==1)	
						{
				
						echo "<script type='text/javascript'>
							alert('YOU have voted, YOU CAN not vote many time!!!');
						</script>";
						}			
					else{
						
							
							//if(isset($_POST['vote']))
							{
								$vote=$_POST['nominated'];
								global $username;
			
								$query= "SELECT votes FROM hec where name='$vote'";
								$result= mysqli_query($con,$query);
								$count="";
								$row=mysqli_fetch_assoc($result);
								$count=$row["votes"];
								$count=$count+1;
			
			
								$query= "UPDATE hec SET votes=$count where name='$vote'";
								$result= mysqli_query($con,$query);
								$x= $_SESSION["user"];
								$query= "INSERT INTO hecstud (name,flag) VALUES ('$x','1')";
										$result= mysqli_query($con,$query);
								
							}
							
							
					}
					
					mysqli_close($con);
			}
		?>
		
	
						</div>		  <!--hec main div is closed here-->
					
	
	
	
	
	
		<!--  sports COMITTEE CODE -->		
	
	<!-- Modal -->
	
					<div id="sports" class="modal fade" role="dialog">
					
					
					<?php
					
			$con= mysqli_connect("localhost","root","","hackathon");
			if(mysqli_connect_errno())
			{
				die("datbase coonection failed" . mysqli_connect_error() );
			}
			
				
			$query= "SELECT name FROM sport";
			$result= mysqli_query($con,$query);
			$name1="";
			$row=mysqli_fetch_assoc($result);
			$name1=$row["name"];
			
			
			//mysqli_close($con);
		
		?>
					
					
					
						<div class="modal-dialog">
									
						<!-- Modal content-->
							<div class="modal-content bl">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><center><b><font color="blue">SPORTS COMMITTEE</font></b></center></h4>
								</div>
								<div class="modal-body">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<input type="radio" name="nominated" value="<?php echo $name1;?>" ><b><font size="4"><?php echo "  ".ucwords($name1);
                             $row=mysqli_fetch_assoc($result);
			                 $name1=$row["name"];
							?> </font></b></br>
							<input type="radio" name="nominated" value="<?php echo $name1;?>"><b><font size="4"><?php echo "  ".ucwords($name1);
                             $row=mysqli_fetch_assoc($result);
			                 $name1=$row["name"];
							?> </font></b></br>
							<input type="radio" name="nominated" value="<?php echo $name1;?>"><b><font size="4"><?php echo "  ".ucwords($name1);
                             $row=mysqli_fetch_assoc($result);
			                 $name1=$row["name"];
							?> </font></b></br></br>
							<input type="submit" name="vote2" value="vote"/></br>
							
							
			</form> 
								
		
		
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

				</div> 
				<!--------------modal id is closed here--->
				<?php
				mysqli_close($con);
				?>
	
			
	
	
			<?php
			
			$con= mysqli_connect("localhost","root","","hackathon");
			if(mysqli_connect_errno())
			{
				die("datbase coonection failed" . mysqli_connect_error() );
			}
			
			if(isset($_POST['vote2']))
			{
						$x= $_SESSION["user"];
						
						$query= "SELECT flag FROM sportstud WHERE name='$x'";
						$result=mysqli_query($con,$query);
						
						$row=mysqli_fetch_assoc($result);
						
					
				
						if($row["flag"]==1)	
						{
				
						echo "<script type='text/javascript'>
							alert('YOU have voted, YOU CAN not vote many time!!!');
						</script>";
						}			
					else{
						
							
							//if(isset($_POST['vote']))
							{
								$vote=$_POST['nominated'];
								global $username;
			
								$query= "SELECT votes FROM sport where name='$vote'";
								$result= mysqli_query($con,$query);
								$count="";
								$row=mysqli_fetch_assoc($result);
								$count=$row["votes"];
								$count=$count+1;
			
			
								$query= "UPDATE sport SET votes=$count where name='$vote'";
								$result= mysqli_query($con,$query);
								$x= $_SESSION["user"];
								$query= "INSERT INTO sportstud (name,flag) VALUES ('$x','1')";
										$result= mysqli_query($con,$query);
								
							}
							
							
					}
					
					mysqli_close($con);
			}
		?>
		
	
						</div>		  <!--sport main div is closed here-->
					
	
	
	
	
	
	
	
	
	

	
	
		<script src="js/jquery.js"></script>
  <!--  <script src="js/bootstrap.js"></script>-->
		<script src="js/bootstrap-modal.js"></script>
	
		
</body>
</html>