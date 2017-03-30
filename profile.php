<html>
  <head>

      <title></title>
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
<html lang="en">

<head>

  <title>PHP - jquery ajax crop image before upload using croppie plugins</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>

  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">

</head>

<body>


<div class="container">

  <div class="panel panel-default">

    <div class="panel-body">


      <div class="row">

        <div class="col-md-4 text-center">

        <div id="upload-demo" style="width:350px"></div>

        </div>

        <div class="col-md-4" style="padding-top:30px;">

        <strong>Select Image:</strong>

        <br/>

        <input type="file" id="upload">

        <br/>

        <button class="btn btn-success upload-result">Upload Image</button>

        </div>

        <div class="col-md-4" style="">

        <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>

        </div>

      </div>


    </div>

  </div>

</div>


<script type="text/javascript">

$uploadCrop = $('#upload-demo').croppie({

    enableExif: true,

    viewport: {

        width: 200,

        height: 200,

        type: 'circle'

    },

    boundary: {

        width: 300,

        height: 300

    }

});


$('#upload').on('change', function () {

  var reader = new FileReader();

    reader.onload = function (e) {

      $uploadCrop.croppie('bind', {

        url: e.target.result

      }).then(function(){

        console.log('jQuery bind complete');

      });



    }

    reader.readAsDataURL(this.files[0]);

});


$('.upload-result').on('click', function (ev) {

  $uploadCrop.croppie('result', {

    type: 'canvas',

    size: 'viewport'

  }).then(function (resp) {


    $.ajax({

      url: "/ajaxpro.php",

      type: "POST",

      data: {"image":resp},

      success: function (data) {

        html = '<img src="' + resp + '" />';

        $("#upload-demo-i").html(html);

      }

    });

  });

});


</script>


</body>

</html>

</body>
</html>