<?php
 $db = mysqli_connect('localhost', 'root', '', 'haras');
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
        ?>
<!DOCTYPE html>
<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcFvBXNM-OsgQGHqCoU6_GVSbZ2Ccgnuw&callback=initMap"
  type="text/javascript"></script>
  <script> 
    google.charts.load('current', { 'packages': ['map'] });
    google.charts.setOnLoadCallback(drawMap);

    function drawMap() {
      var data = google.visualization.arrayToDataTable([
        ['Location'],
        ['Kahawa Sukari'],
        ['Ngong'],
        ['Juja'],
        ['Komarock'],
        ['Buruburu'],
        ['Mwiki'],
        ['Ruiru']  
        
      ]);

    var options = {
      showTooltip: true,
      showInfoWindow: true
    };

    var map = new google.visualization.Map(document.getElementById('chart_div'));

    map.draw(data, options);
  };
  </script>
  </head>
  <body>
    <div id="chart_div"></div>
  </body>
</html>
