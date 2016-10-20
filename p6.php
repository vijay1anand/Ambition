<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-left:4%;padding-top:60px;height:20%;color: black; background-color: aliceblue;}
  #section2 {padding-left:8%;padding-top:10px;height:20%;color: #fff; background-color: grey;}
  #section3 {padding-left:8%;padding-top:10px;height:20%;color: black; background-color: aliceblue;}
  #section41 {padding-left:8%;padding-top:10px;height:20%;color: #fff; background-color: grey;}
  #section42 {padding-left:8%;padding-top:10px;height:20%;color: black; background-color: aliceblue;}
      .sty{background-color:#22BBCC;}  
      .sta{background-color:#8822EE;} 
      .txt{font-size:20px;}
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">LOST/FOUND</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="repo.php">Report</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="f_index.php">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Part4<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Part4-1</a></li>
              <li><a href="#section42">Part4-2</a></li>
            </ul>
          </li>
          </ul>
      </div>
    </div>
  </div>
</nav>
<?php
$conn = new mysqli('localhost','root','',"hackerlf");
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `type`, `name`, `description`, `ID`, `Contact` FROM `detail` WHERE 1";
$result = $conn->query($sql);
$nsql= "SELECT COUNT(*) as total FROM detail";
$count = $conn->query($nsql);
$sol= $count->fetch_assoc();
$m=$sol["total"];
if ($result->num_rows > 0) {
     // output data of each row
     for($i=$m; $i-5>=0;$i--){
        $row = $result->fetch_assoc();
     }
     /*(while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["Dr_name"]. " - Name: ". $row["Specialise"]. " " . $row["Availible"] ." " .              $row["join_date"] ."<br>";
     }*/
} else {
     echo "0 results";
}


?>
<div id="section1" class="container-fluid">
  <div class="container">
      <div class="row">
          <div class = "col-xs-5 col-sm-2 sty">
              <h1><center><?php echo $row["type"];  ?></center></h1>
          </div>
          <div class = "col-xs-7 col-sm-10 txt">
          <?php
            echo " Name : ".$row["name"]."<br>";
            echo " ID : ".$row["ID"]."<br>";
            echo $row["description"]."<br>";
            echo " Contact: ".$row["Contact"]."<br>";
            $row = $result->fetch_assoc();
           ?>
          </div>
      </div>
    </div>
</div>
<div id="section2" class="container-fluid">
  <div class = "col-xs-5 col-sm-2 sta">
              <h1><center><?php echo $row["type"];  ?></center></h1>
          </div>
          <div class = "col-xs-7 col-sm-10 txt">
              <?php
            echo " Name : ".$row["name"]."<br>";
            echo " ID : ".$row["ID"]."<br>";
            echo $row["description"]."<br>";
            echo " Contact: ".$row["Contact"]."<br>";
            $row = $result->fetch_assoc();
           ?>
    </div>
      </div>
<div id="section3" class="container-fluid">
  <div class = "col-xs-5 col-sm-2 sty">
              <h1><center><?php echo $row["type"];  ?></center></h1>
          </div>
          <div class = "col-xs-7 col-sm-10 txt">
           <?php
            echo " Name : ".$row["name"]."<br>";
            echo " ID : ".$row["ID"]."<br>";
            echo $row["description"]."<br>";
            echo " Contact: ".$row["Contact"]."<br>";
            $row = $result->fetch_assoc();
           ?>
    </div>
      </div>
<div id="section41" class="container-fluid">
   <div class = "col-xs-5 col-sm-2 sta">
              <h1><center><?php echo $row["type"];  ?></center></h1>
          </div>
          <div class = "col-xs-7 col-sm-10 txt">
           <?php
            echo " Name : ".$row["name"]."<br>";
            echo " ID : ".$row["ID"]."<br>";
            echo $row["description"]."<br>";
            echo " Contact: ".$row["Contact"]."<br>";
            $row = $result->fetch_assoc();
           ?>
    </div>
      </div>

<div id="section42" class="container-fluid">
   <div class = "col-xs-5 col-sm-2 sty">
              <h1><center><?php echo $row["type"];  ?></center></h1>
          </div>
          <div class = "col-xs-7 col-sm-10 txt">
           <?php
            echo " Name : ".$row["name"]."<br>";
            echo " ID : ".$row["ID"]."<br>";
            echo $row["description"]."<br>";
            echo " Contact: ".$row["Contact"]."<br>";
            $conn->close();
           ?>
    </div>
      </div>
</body>
</html>