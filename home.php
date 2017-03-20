<?php
require'session.php';
require'connection.php';
if (!alreadyin()) {
  header("location: index.php");
}
$username=$_SESSION['username'];

$q="SELECT * FROM `users` WHERE `Username`='$username' ";
$result=mysqli_query($conn,$q);
while($user =mysqli_fetch_array($result)) {
	$firstname=$user['Firstname'];
	$surname=$user['Surname'];
	$username=$user['Username'];
	
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




</head>

<body>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
 <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href=""><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href=""><i class="fa fa-book" aria-hidden="true"></i>About us</a></li>
      <li><a href=""><i class="fa fa-address-book" aria-hidden="true"></i>Contacts</a></li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="" ><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a></li>
      <li><a href="" ><i class="fa fa-star" aria-hidden="true"></i> TUM</a></li>
      <li><a href="" ><i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a></li>
      <li><a href="" ><i class="fa fa-envelope" aria-hidden="true"></i> Gmail</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Unit Allocation</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contacts</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->   
  </div>
</nav>

<div class="row">
  <div class="container">
<h1>KARIBU  <?php echo $firstname ." ".$surname; ?></h1>
<p> if you want to log out click <a href="logout.php">here</a> </p>
 


 <div class="row">
  <div class="col-md-4">
    <button type="button" class="btn btn-primary">My Profile</button>
  </div>

  <div class="col-md-4">
    <button type="button" class="btn btn-success">Timetable</button>
  </div>

  <div class="col-md-4">
    <a href="modules/lecturers/unitsAllocation.php" class="btn btn-warning">Unit Allocation</a>
  </div>
</div>   
  </div>
</div>

<h1>test</h1>
























<footer>
  <div class="container">
    

      <div class="col-md-1">
      <h6>Copyright &copy; {valentine}</h6>
      </div> <!--end col-md-1 -->
     
      <div class="col-md-4">
      <h6> About us</h6>
      <p>property of valentine mathai school of technology</p>
      </div><!--end col-md-4 -->

      <div class="col-md-1">
        <h6>Navigation</h6>
        <ul class="unstyled">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>

      </div> <!--end col-md-1 -->
     
      <div class="col-md-4">
      <h6>Follow Us</h6>
        <ul class="unstyled">
            <li><a href="">Facebook</a></li>
            <li><a href="">Twitter</a></li>
            <li><a href="">Tum</a></li>
            <li><a href="">Google Plus</a></li>
        </ul>

      </div><!--end col-md-4 -->

      <div class="col-md-1">
      <h6> Coded by <span class=".glyphicon .glyphicon-heart" ".glyphicon .glyphicon-heart"> Valentine </span></h6>
      </div><!--end col-md-4 -->
   
  </div><!--end contanier-->

</footer>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>      
</body>
</html>
       









