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
      <div class= "row">
      <div class="container">
         <h1>Units</h1>
      </div>
   
      </div>
      <div class="container">
      <!--form starts here-->
         <form action="unitadds.php" method="POST">
        <div class="form-group">
          <label for="exampleunitid">Unit ID</label>
          <input type="text" name="Unitid" class="form-control" id="exampleinputunitid" placeholder="Enter Unit id">
        </div>
        <div class="form-group">
          <label for="exampleInputunitname">Unit Name</label>
          <input type="text" name="Unitname" class="form-control" id="exampleInputunitname" placeholder="Enter Unit Name">
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