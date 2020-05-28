<?php include('report.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sauti</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style="background-image: url(images/3.jpg) ; background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;  background-size: cover; ">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style='position: relative';>
  <div class="container">
    <a class="navbar-brand" href="#">Paza Sauti!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reportmain.php">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="chart.php">The Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav
><div class="jumbotron" style='text-align: center; position: relative;  margin: 0 auto;
width: 50%;'>
  <form method="post" action="reportmain.php" enctype="multipart/form-data" ><h5>Please try to provide as much informatiom as possible </h4>
  <?php if(!empty($error)):?>
  <div class=" alert alert-danger">
    <?= $error ?>
  </div>  
<?php elseif(!empty($message)): ?>
<div class=" alert alert-success">
    <?= $message ?>
  </div>  
<?php endif ?>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputdestination">From</label>
        <input type="text" class="form-control" id="inputdestination" name="departure" placeholder="Where are you travelling from?" required >
      </div>
      <div class="form-group col-md-6">
        <label for="destination">To</label>
        <input type="text" class="form-control" id="destination" name="destination" placeholder="Where are you travelling to?"required>
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputsacco">Sacco</label>
        <input type="text" class="form-control" id="inputsacco" name="sacco" placeholder="Sacco Name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputreg">Registration Number</label>
        <input type="text" class="form-control" id="inputreg" name="reg"  placeholder="Vehicle Registration Number">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress2">Date </label>
      <input type="date" class="form-control" id="inputtime" name="time">
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Brief Description</label>
        <textarea id="BriefDescription" name="brief" rows="4" cols="50" placeholder="Please provide some details of how the incedent transpired."></textarea>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="myfile">Supporting Media</label>
        <div class="custom-file">
        <input type="file" id="myfile" name="myfile" >
        </div>
    </div>
    <div class="form-group col-md-6">
      If you need someone to talk to,feel free to Leave your contacts and we will get to you as soon as possible.
      <input type="text" class="form-control" id="inputContact" name="phone" placeholder="0712345678"> 
    </div>
    </div>
    <button type="submit" class="btn btn-primary" name="report">Report</button>
  </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

