<?php
require'connection.php';
?>
<html>
  <head>

      <title>Timetable</title>
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
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">


<!--All Javascript at the bottom of the page for faster page loading -->


<style type="text/css">
  .navbar-custom {
    color: #FFFFFF;
    background-color: #1b5e20;
}
.navbar-custom a {
  color: #FFFFFF;
}
table{

 padding:2px;
 width:1000px;

}
th{
  border:2px solid black !important;
}
input{
  padding:5px;
}
a:link{text-decoration:none;}
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
    <a class="navbar-brand" href="http://localhost/unit-allocation/home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
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
      <button type="submit" class="btn btn-default">Search</button>
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
  <h3>TIMETABLE SCHECULAR</h3>

  <div class="row">

    <table class="table table-hover">
                         <tr align="center"><td colspan="6"><h2>Master timetable</h2></tr>
                         <tr align="center">
                         <th>S.N </th>
                         <th>Username</th>
                         <th>Unitid </th>
                         <th>Venue</th>
                         <th>Time</th>
                         <th>Delete </th>
                         </tr>
   <?php
   $sel="SELECT * FROM `mastertimetable`";
   $run=mysqli_query($conn,$sel);
   $i=0;
   while($row=mysqli_fetch_array($run)){
   $id=$row['id'];
   $Username=$row['Username'];
   $Unitid=$row['Unitid'];
   $Venue=$row['Venue'];
   $Time=$row['Time'];
   $i++;

   ?>
   <tr align="center">
   <td><?php echo $i; ?></td>
   <td><?php echo $Username; ?></td>
   <td><?php echo $Unitid; ?></td>
   <td><?php echo $Venue; ?></td>
   <td><?php echo $Time; ?></td>
   <td><a href="timetable.php?delete=<?php echo $id; ?>">Delete</a></td>
   </tr>
   <?php }?>
   </table>
   <?php
   if(isset($_GET['delete']))
   {
     $delete_id=$_GET['delete'];
     $delete="DELETE FROM `mastertimetable` WHERE `mastertimetable`.`id` ='$delete_id'";
     $run_delete=mysqli_query($con,$delete);
     if($run_delete)
     {
       echo "<script>alert('Data deleted successfully')</script>";
       echo "<script>window.open('basic_table.php','_self')</script>";
     }
   }
   ?>
  </div>
</div>



        </div>
</div>

<?php
  include('footer.php');
  ?>
</body>
</html>
