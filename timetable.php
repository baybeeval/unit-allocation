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
    <form class="form-inline" role="form">

 <form action='../../add.php' method='POST'>
     <div class="form-group">
       <label for="exampleInputcourse1">Course</label>
          <select class="form-control" name="course" id="course" onchange="getunits()">
            <option value="">----------SELECT COURSE-----------------------</option>
                              <?php 
                                 $qC ="SELECT * FROM `course` ";
                                   $rC = mysqli_query($conn, $qC);

                                       while ($rowC = mysqli_fetch_array($rC)) {
                                         $Course = $rowC['Course'];
                                                    ?>
                                         <option value="<?php echo "$Course"; ?>"><?php echo "$Course"; ?></option>

                                           <?php
                                              }
                                            ?>
          </select>
      </div>


   <div class="form-group">
     <label form="exampleInputyear1">Year</label>
    <select name="year" class="form-control" id="year" >
     <option value="">----------SELECT YEAR-----------------------</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
     </select>

  <div class="form-group">
     <label for="exampleInputsemester1">Semester</label>
    <select name="semester" class="form-control" id="semester" >
      <option value="">----------SELECT SEMESTER-----------------------</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    </select>
                    </div>

  <div class="form-group">
    <label class="sr-only" for="exampleInputunitid">UNIT</label>
     <div id="unitList">
    <select name="units" class="form-control" id="units">
        <option>---  SELECT UNITS ---</option>
        <?php
        require'connection.php';

            $pp= "SELECT * FROM `units`";
                       $rp= mysqli_query($conn, $pp);

                            while ($rowp= mysqli_fetch_array($rp)){

                                  $unitid=$rowp['Unitid'];
                                  $unitname=$rowp['Unitname'];
                                  ?>
                                  <option value="<?php echo "$unitid";?> "><?php echo "$unitid"." "."$unitname";?></option>
                          <?php
                            }
                            ?>
      </select>
      </div>
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>

    
  </div>
</div>



        </div>
</div>

<?php
  include('footer.php');  
  ?>
</body>
</html>