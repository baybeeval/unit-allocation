<html>
  <head>
    <title>Register</title>
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
      <div class= "row">
      <div class="container">
         <h1>Register</h1>
      </div>
   
      </div>
      <div class="container">
      <!--form starts here-->
         <form action="reg.php" method="POST">
        <div class="form-group">
          <label for="examplefirstname1">Firstname</label>
          <input type="text" name="firstname" class="form-control" id="examplefirstname" placeholder="Enter firstname">
        </div>
        <div class="form-group">
          <label for="exampleInputsurnme1">Surname</label>
          <input type="text" name="surname" class="form-control" id="exampleInputsurname1" placeholder="Enter Surname">
        </div>
        <div class="form-group">
          <label for="exampleInputusername">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputusername" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
</div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//assets/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>