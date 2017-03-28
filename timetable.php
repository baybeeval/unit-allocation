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
    <a class="navbar-brand" href="http://localhost/unit-allocation/home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      
      <li><a href=""><i class="fa fa-address-book" aria-hidden="true"></i>Contacts</a></li>
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
  <h3>TIMETABLE SCHECULAR</h3>

  <div class="row">
    <form class="form-inline" role="form">

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

   <div class="form-group">
    <label class="sr-only" for="exampleInputclassid">CLASS</label>
    <input type="text" class="form-control" id="exampleInputclassid" placeholder="Enter class">
  </div>

   <div class="form-group">
    <label class="sr-only" for="exampleInputday">DAY</label>
    <input type="text" class="form-control" id="exampleInputday" placeholder="Enter Day">
  </div> 

  <div class="form-group">
    <label class="sr-only" for="exampleInputtime">TIME</label>
    <input type="varchar" class="form-control" id="exampleInputtime" placeholder="Enter time">
  </div>

  <div class="form-group">
    <label class="sr-only" for="exampleInputvenue">VENUE</label>
    <input type="venue" class="form-control" id="exampleInputvenue" placeholder="Enter Venue">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>

    
  </div>
</div>












        </div>
</div>
</body>
</html>