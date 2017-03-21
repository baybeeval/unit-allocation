<?php
require'../../session.php';
require'../../connection.php';
?>

<html>
  <head>
    <title>Unit allocation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    
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
    <a class="navbar-brand" href="localhost/project">Home</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">About us</a></li>
      <li><a href="#">contacts</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Unit Allocation</a></li>
          <li><a href="#">Timetable</a></li>
          <li><a href="#">contacts</a></li>
          <li><a href="#">Comments</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->   
  </div>
</nav>

   <div class="row">

      <div class="container">

        <h1>Unit Allocation</h1>
        <div class="row">
            <table class="table table-hover">
             <thead>
              <th>Id</th>
              <th>Unit Id</th>
              <th>Unit Name</th>
              <th>Modify</th>
             </thead>

             <tr>
               <td><?php 
                        $q ="SELECT * FROM  units";
                         $r = mysqli_query($conn, $q);
                            $i=0;
                            while ($row = mysqli_fetch_array($r)) {
                              $id = $row['id'];
                              $unitId = $row['Unitid'];
                              $unitName = $row['Unitname'];
                              $i++;
                              ?>
                              <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $unitId; ?></td>
                            <td><?php echo $unitName; ?></td>
                            <td><a href="unitsAllocation.php?id=<?php echo $id; ?>"> Drop</a></td>
                            </tr>
                             <?php
                            }
                         ?></td>
             </tr>
            </table>
          <?php
            if(isset($_GET['id'])){

              $get_id=$_GET['id'];

                $delete="DELETE FROM `units` WHERE `units`.`id` = $id;";
                $r_delete= mysqli_query($conn,$delete);

                if($r_delete){
                  echo "<script>alert('unit is succesfully dropped!!')</script>";
                  echo "<script>window.open('unitsAllocation.php','_self')</script>";
                }
            }





          ?>









        </div>













        <div class="row">


                <div class="col-md-4">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button>
                </div>

                <div class="col-md-4">
                  <button type="button" class="btn btn-success">Drop All</button>
                </div>

                <div class="col-md-4">
                  <button type="" class="btn btn-warning">Submit</button>
      </div>


    </div>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                           
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Add units</h4>
                        </div>
                        <div class="modal-body">
                           <!--form starts here-->
                                   <form action='add.php' method='POST'>
                                    <div class="form-group">
                                      <label for="exampleInputcourse1">Course</label>
                                      <select class="form-control" name="course">
                                        <option>----------SELECT COURSE-----------------------</option>
                                        <option value="BSIT">BSIT</option>
                                        <option value="BSIT">BTIT</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputyear1">Year</label>
                                     <select name="year" class="form-control">
                                     <option>----------SELECT YEAR-----------------------</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputsemester1">Semester</label>
                                      <select name="semester" class="form-control">
                                      <option>----------SELECT SEMESTER-----------------------</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputunit1">Units</label>
                                      <select name="unit" class="form-control">
                                      <option>----------SELECT UNITS-----------------------</option>
                                      <?php 
                                          $q ="SELECT * FROM `units`";
                                          $r = mysqli_query($conn, $q);

                                          while ($row = mysqli_fetch_array($r)) {
                                            $unitName = $row['Unitname'];
                                            ?>
                                          <option value="<?php echo $unitName; ?>"><?php echo "$unitName"; ?></option>
                                            <?php
                                          }
                                       ?>

                                      </select>
                                    </div>
                                  
                                    <button type="submit" class="btn btn-default">Submit</button>
                                  </form>

                        </div>

                      </div>
                    </div>
                  </div>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../assets/js/bootstrap.js"></script>
  </body>
</html>