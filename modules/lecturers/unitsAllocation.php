<?php
require'../../session.php';
require'../../connection.php';
?>

<html>
  <head>

      <title></title>
      <meta name="description" content="">

      <!--mobile viewpoint optimmized-->
      <meta name="viewreport"content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

      <!--Bootstrap CSS -->
       <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

   <!--Custom CSS-->
   <link rel="stylesheet" href="../../assets/css/styles.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">

   <!--Include Modernizr in the head, before any other Javascript -->
   <script src="../../assets/js/modernizr-.2.6.2.min.js" rel="stylesheet"></script>

<!--All Javascript at the bottom of the page for faster page loading -->


<style type="text/css">
  .navbar-custom {
    color: #FFFFFF;
    background-color: #1b5e20;
}
.navbar-custom a {
  color: #FFFFFF;
}
#search {
    width: 15em;  height: 2em;
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
                        $q ="SELECT * FROM  `unitsallocation`";
                         $r = mysqli_query($conn, $q);
                            $i=0;
                            while ($row = mysqli_fetch_array($r)) {
                              $id = $row['id'];

                              $unitID = $row['Unitid'];
                              $unitName = $row['Unitname'];
                              $i++;
                              ?>
                              <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $unitID; ?></td>
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

                $delete="DELETE FROM  `unitsallocation`  WHERE  `unitsallocation`.`id` = $id;";
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
                  <div style="padding-left:370px;">
                  <button type="button" id="search" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button>
                  </div>
                </div>


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
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputsemester1">Semester</label>
                                      <select name="semester" class="form-control" id="semester" >
                                      <option value="">----------SELECT SEMESTER-----------------------</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputunit1">Units</label>
                                      <div id="unitList">
                                      <select name="unit" class="form-control" id="unit" >
                                      <option value="">----------SELECT UNITS-----------------------</option>
                                      </select>
                                       </div>

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
    <script type="text/javascript">
    $(document).ready(function(){
      if ($('#course').val()=='') {
           $('#year').prop('disabled', true)
           $('#semester').prop('disabled', true);
           $('#unit').prop('disabled', true);
      }

      $('#course').on('change', function(){
        $("#year").prop("disabled", false);
      })

       $("#year").on('change', function(){
         $('#semester').prop('disabled', false);
       })


       $("#semester").on('change', function(){
         $('#unit').prop('disabled', false);

         var course = $('#course').val();
         var year = $('#year').val();
         var semester = $('#semester').val();

         $.post('querUnit.php', {course1:course,year1:year, semester1:semester}, function(data){
           $('#unitList').html(data);
         })


       })

    })





    </script>


  </body>
</html>
