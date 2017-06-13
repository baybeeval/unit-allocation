<html>
  <head>

      <title></title>
      <meta name="description" content="">
     
      <!--mobile viewpoint optimmized-->
      <meta name="viewreport"content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

      <!--Bootstrap CSS -->
       <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="screen">

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
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="" ><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a></li>
      <li><a href="" ><i class="fa fa-star" aria-hidden="true"></i> TUM</a></li>
      <li><a href="" ><i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a></li>
      <li><a href="" ><i class="fa fa-envelope" aria-hidden="true"></i> Gmail</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->   
  </div>
</nav>


  <div class= "row">
      <div class="container">
         <h1>Department Courses</h1>
      </div>
   
      </div>
      <div class="container">
      <!--form starts here-->
         <form action="course.php" method="post">
        <div class="form-group">
          <label for="exampleinputcourseid">Course ID</label>
          <input type="text" name="courseid" class="form-control" id="exampleinputcourseid" placeholder="Enter Course Id" required>
        </div>
        <div class="form-group">
          <label for="exampleInputcoursename">Course Name</label>
          <input type="text" name="coursename" class="form-control" id="exampleInputcoursename" placeholder="Enter Course Name" required>
        </div>
        <button type="submit" class="btn btn-success">Add</button><span>
          <?php
          require "connection.php";

          if (@$_POST['courseid'] && $_POST['coursename']) {
            $Courseid=$_POST['courseid'];
            $Coursename=$_POST['coursename'];

            if(empty($Courseid)|| empty($Coursename)){
              echo "fill all required fields!";
            }else{
                $p="INSERT INTO `course`(`Courseid`, `Course`) VALUES ('$Courseid','$Coursename')";

            if (mysqli_query($conn,$p)){
              echo "course has been added successfully!";
            }else{
              echo "error occured while adding course!";
            }

            }
           
          
            
          }


          ?>

        </span>
</form>
</div>
<?php
  include('footer.php');  
  ?>
</body>
</html>
