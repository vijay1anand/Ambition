 <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <title>www.IIITVCommitee.org</title>
        
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="http://localhost/project/bo2.css" type="text/css"
    rel="stylesheet" />
    </head>
     <body>
         <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $batchErr = $idErr=$commErr="";
$name = $email = $gender = $batch = $id = $comm="";
$c=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
       if( $c != 0 )
       {$nameErr = "Name is required";}
       else
          $nameErr = ""; 
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
      if( $c != 0 )   
      {$emailErr = "Email is required";}
       
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["id"])) {
        if($c!=0)  
        {$idErr = "ID is required";}
    
   } else {
     $id = test_input($_POST["id"]);
     // check if ID is valid
     }
    if (empty($_POST["batch"])) {
        if( $c != 0 )
     $batchErr = "Batch is required";
   } else {
     $batch = test_input($_POST["id"]);
     // check if batch is valid
        if( $batch < 2012 || $batch > 2015)
        {   
        if( $c != 0 ) 
         $batchErr = "Invalid Batch";
        }
     }
   if (empty($_POST["comm"])) {
     $commErr = "commitee required";
   } 
    else {
     $comm = test_input($_POST["comm"]);
   }

   if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            }
    else {
            $gender = test_input($_POST["gender"]);
         }
$c++;
//echo $c;    
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
          <div class="container1">
            <div class="row " >
<form  name="registe" method="post" > 
    <div class="col-md-6 col-xs-12">
    <label>Name</label>&nbsp;&nbsp;&nbsp;<input type="text" name="name">
   <span class="error"><?php echo $nameErr;?></span>
   <br><br>
    </div>
     <div class="col-md-6 col-xs-12">    
    <label>ID </label>&nbsp;&nbsp;&nbsp;<input type="number" name="id">
   <span class="error"><?php echo $idErr;?></span>
   <br><br>
        </div>     
     <div class="col-md-6 col-xs-12">     
    <label>Batch</label>&nbsp;&nbsp;&nbsp;<input type="number" name="batch">
   <span class="error" min="2013" max="2015"><?php echo $batchErr;?></span>
   <br><br>
         </div>
   <div class="col-md-6 col-xs-12">     
    <label>Gender</label>&nbsp;&nbsp;&nbsp;
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>     value="female">Female
  &nbsp;&nbsp;&nbsp;   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
    <span class="error"><?php echo $genderErr;?></span>
   <br><br>
         </div>
    <div class="col-md-6 col-xs-12">
    <label>Committee</label>&nbsp;&nbsp;&nbsp;
    <select name="comm">
        <option value="">Commite List</option>
        <option  value="sport">Sports</option>
         <option value="mess">Mess</option>
         <option value="administration">Administration</option>
         <option  value="organising">Organising</option>
         <option  value="design">Design Club</option>
  </select> 
    <span class="error"><?php echo $commErr;?></span>    
    <br><br>
       </div>
     <div class="col-md-6 col-xs-12">
    <label>E-Mail</label>&nbsp;&nbsp;&nbsp;<input type="text" name="email" >
   <span class="error"><?php echo $emailErr;?></span>
   <br><br>
        </div>
     <div class="col-md-6 col-xs-12">     
   <input class="btn btn-success btn-sm" type="submit" name="submit" value="Submit"> 
       <br><br>  
    </div>
         </form>

              
              
              </div>
         </div>
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    </body>
</html>
<?php
$conn = new mysqli('localhost','root','',"register");
//$query = "CREATE TABLE detail (st_name varchar(30),id int(9) PRIMARY KEY,batch int(4),gender varchar(6),email varchar(20),committe varchar(15))";

/*if (!$conn->query($query)) {
            echo "Error: ".$conn->error;
            return 0;
        }
*/
//echo $_POST["name"],$_POST["id"],$_POST["batch"],$_POST["gender"],$_POST["email"],$_POST["comm"];
if(isset($_POST['name']) && isset($_POST['id']) && isset($_POST['batch'])&& isset($_POST['gender'])&& isset($_POST['comm'])&& isset($_POST['email']))
{
 $query ="INSERT INTO `detail`(`st_name`, `id`, `batch`, `gender`, `email`, `committe`)VALUES('$_POST[name]','$_POST[id]','$_POST[batch]','$_POST[gender]','$_POST[email]','$_POST[comm]')";
         
    if (!$conn->query($query)) {
            echo "Error: ".$conn->error;
            return 0;
        }
    
}
else {
    //echo "Enter valid entry";
}

?>