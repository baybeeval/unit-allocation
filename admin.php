<html>
  <head>
    <title>Lecturer unit allocation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

  <body>
<?php
  include"nav.php";  
  ?>


  <div class="row">
  <div class="container">
    <h1>Login</h1>
  </div>
    
  </div>
<div class="container">
  
 <!--form starts here-->
         <form action='admin.php' method='POST'>
          <div class="form-group">
            <label for="exampleInputusername1">Adminstrator</label>
            <input type="text" name="username" class="form-control" id="exampleusername1" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox"> Stay logged in
            </label>
          </div>
          <button type="submit" class="btn btn-default" id="sub">Submit</button>
        </form>


              <?php
              require'session.php';
              require'connection.php';
              if (alreadyin()) {
                header("location: home_admin.php");
              }
              if($_POST){
                $username=$_POST['username'];
                $Password=$_POST['Password'];
                if (!empty($username)&&!empty($Password)) {
                  
                
                $q="SELECT * FROM `admin` WHERE `username`='$username' and `Password`='$Password'";
                $r=mysqli_query($conn,$q);
                if (mysqli_num_rows($r)==1) {
                  $_SESSION['username']=$username;
                  header("location: home_admin.php"); 
                }
                else{
                  ?>
                  <div class="alert alert-danger">Invalid<span class="glyphicon glyphicon-exclamation-sign"> </span> username and password combined!</div>
                  <?php 
                }


              }else{
                ?>
              <div class="alert alert-danger">fill the fields before submitting!</div>
                <?php
              }
              }
              ?>        

</div>



<?php
  include('footer.php');  
  ?>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>