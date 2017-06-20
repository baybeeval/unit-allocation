<?php
require'session.php';
require'connection.php';
if (!alreadyin()) {
  
}
$username=$_SESSION['username'];

$q="SELECT * FROM `admin` WHERE `username`='$username' ";
$result=mysqli_query($conn,$q);
while($user =mysqli_fetch_array($result)) {
	$username=$user['username'];

}

?>

<html>
  <head>

      <title></title>
      <meta name="description" content="">

      <!--mobile viewpoint optimmized-->
      <meta name="viewreport"content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

      <!--Bootstrap CSS -->
       <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

   <!--Custom CSS-->
   <link rel="stylesheet" href="assets/css/styles.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

   <!--Include Modernizr in the head, before any other Javascript -->
   <script src="assets/js/modernizr-.2.6.2.min.js" rel="stylesheet"></script>

<!--All Javascript at the bottom of the page for faster page loading -->


<style type="text/css">
  .navbar-custom {
    color: #FFFFFF;
    background-color: #1b5e20;
}
.navbar-custom a {
  color: #FFFFFF;
}
</style>

</head>

<body>
<nav class="navbar navbar-custom" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
 <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://localhost/unit-allocation/home_admin.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">

      <li><a href="http://localhost/unit-allocation/contacts.php"><i class="fa fa-address-book" aria-hidden="true"></i>Contacts</a></li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://www.facebook.com" ><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a></li>
      <li><a href="http://www.tum.ac.ke" ><i class="fa fa-star" aria-hidden="true"></i> TUM</a></li>
      <li><a href="http://www.twitter.com" ><i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a></li>
      <li><a href="http://www.gmail.com" ><i class="fa fa-envelope" aria-hidden="true"></i> Gmail</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="row">
  <div class="container">
<h1>KARIBU  <?php echo $username; ?></h1>
<p> if you want to log out click <a href="logout.php">here</a> </p>
 

<h1>SELECTIONS</h1>
<div class="row">
  <div class="col-md-4">
    <a href="operations.php"  class="btn btn-primary" id="bott">Operations</a>
  </div>

  <div class="col-md-4">
    <a href="timetable.php" class="btn btn-success" id="buzz">Timetable</a>
  </div>

  <div class="col-md-4">
    <a href="modules/lecturers/unitsAllocation.php" class="btn btn-warning" id="butt">Unit Allocation</a>
  </div>
</div>
  </div>
</div>


 <style type="text/css">
     #butt{
      background-color: #D35400;
         }
      #buzz{
        background-color:#008000;
      }
      #bott{
        background-color: #008080;
      }

        </style>
 <?php
  include('footer.php');  
  ?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
