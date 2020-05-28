<!DOCTYPE html>
<html>
<head>
  <title>Sauti</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
      <?php

      $db = mysqli_connect('localhost', 'root', '', 'haras');
      $sacco_check_query = "SELECT * FROM sacco ";
      $result = mysqli_query($db, $sacco_check_query);
      $a=array();
      $b=array();
      while($rows =mysqli_fetch_array($result)){
      $rev=$rows['count'];
      $val=$rows['sacco'];
      array_push($a,$rev);
      array_push($b,$val);
      }

      $dep_check_query = "SELECT * FROM departure ";
      $result2 = mysqli_query($db, $dep_check_query);
      $a2=array();
      $b2=array();
      while($rows2 =mysqli_fetch_array($result2)){
      $rev2=$rows2['count'];
      $val2=$rows2['departure'];
      array_push($a2,$rev2);
      array_push($b2,$val2);
      }

      $result3= mysqli_num_rows($result);
                    


    ?>

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
          <a class="nav-link" href="chart.php">The data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Reports</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $result3; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<div style='height: 100px; width: 500px; position: relative; float: right;'>
<h4>Locations</h4>
<canvas id="myChart2"></canvas>
</div>
<div style='height: 100px; width: 500px; position: relative;' >
<h4>Saccos</h4>
<canvas id="myChart" width="100px" height="100px"></canvas>
</div>




 <script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:<?php echo json_encode($b); ?>,
            datasets: [{
                label: 'Number of Reports',
                data: <?php echo json_encode($a); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx2 = document.getElementById('myChart2');
    var myChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels:<?php echo json_encode($b2); ?>,
            datasets: [{
                label: 'Number of Reports',
                data: <?php echo json_encode($a2); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        
    });
    </script>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>