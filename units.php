<html>
  <head>
    <title>Units</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
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
    </ul>
  </div><!-- /.navbar-collapse -->   
  </div>
</nav>

      <div class= "row">
      <div class="container">
         <h1>Units</h1>
      </div>
   
      </div>
      <div class="container">
      <!--form starts here-->
         <form action="unitadds.php" method="post">
        <div class="form-group">
          <label for="exampleunitid">Unit ID</label>
          <input type="text" name="unitid" class="form-control" id="exampleinputunitid" placeholder="Enter Unit id">
        </div>
        <div class="form-group">
          <label for="exampleInputunitname">Unit Name</label>
          <input type="text" name="Unitname" class="form-control" id="exampleInputunitname" placeholder="Enter Unit Name">
        </div>
        <div class="form-group">
          <label for="exampleInputcourse">Course</label>
            <select name="Course"  class="form-control">
              <option value="">--      Select Course       --</option>
                  <?php 
                  require'connection.php';

                        $q ="SELECT * FROM `course` ";
                                          $r = mysqli_query($conn, $q);

                                          while ($row = mysqli_fetch_array($r)) {
                                            $Course = $row['Course'];
                                            ?>
                                          <option value="<?php echo "$Course"; ?>"><?php echo "$Course"; ?></option>

                                            <?php
                                          }

                                ?>
            </select>          
        </div>
        
        <div class="form-group">
          <label for="exampleInputyear">>Year</label>
          <input type="varchar" name="Year" class="form-control" id="exampleInputyear" placeholder="Enter Year">
        </div>

        <div class="form-group">
          <label for="exampleInputsemester">Semester</label>
          <input type="text" name="Semester" class="form-control" id="exampleInputsemester" placeholder="Enter Semester">
        </div>
        <button type="submit" class="btn btn-default">Add units</button>
      </form>
</div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//assets/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>