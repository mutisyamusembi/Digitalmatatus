<?php
$error = '';

$db = mysqli_connect('localhost', 'root', '', 'haras');

if (isset($_POST['report'])) {
    // receive all input values from the form
    $departure = mysqli_real_escape_string($db, $_POST['departure']);
    $destination = mysqli_real_escape_string($db, $_POST['destination']);
    $sacco = mysqli_real_escape_string($db, $_POST['sacco']);
    $reg = mysqli_real_escape_string($db, $_POST['reg']);
    $time = mysqli_real_escape_string($db, $_POST['time']);
    $brief = mysqli_real_escape_string($db, $_POST['brief']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);


    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $dest = 'uploads/' .basename($filename) ;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (move_uploaded_file($file, $dest)) {

    $query = "INSERT INTO reports (Departure, Destination, Sacco, Reg, Time, BriefDesc, Phone, Media)
       VALUES('$departure','$destination','$sacco', '$reg', '$time','$brief','$phone','$filename')";
       if (mysqli_query($db, $query)) {
        $message = 'Your account has been recorded.Thank you for your contribution to making roads safer!'; 
       }
       }  
    $sacco_check_query = "SELECT * FROM sacco WHERE sacco='$sacco' LIMIT 1";
    $result = mysqli_query($db, $sacco_check_query);
    $sacco_exist = mysqli_fetch_assoc($result);
       
    if ($sacco_exist) { // if sacco exists
        $count = $sacco_exist['count'] + 1;
        $query_sacco = "UPDATE sacco SET count = '$count' WHERE sacco ='$sacco'";  
        $result_sacco = mysqli_query($db, $query_sacco); 
      
                    
                }
    else {
        $count = 1;
        $query_sacco_first = "INSERT INTO sacco (sacco, count) VALUES ('$sacco','$count')";
        $result_sacco_first = mysqli_query($db,$query_sacco_first);


       }

       $departure_check_query = "SELECT * FROM departure WHERE departure='$departure' LIMIT 1";
       $result_dep = mysqli_query($db, $departure_check_query);
       $departure_exist = mysqli_fetch_assoc($result_dep);
          
       if ($departure_exist) { // if departure location exists
           $count_dep= $departure_exist['count'] + 1;
           $query_departure = "UPDATE departure SET count = '$count_dep' WHERE departure='$departure'";  
           $result_departure = mysqli_query($db, $query_departure); 
         
                       
                   }
       else {
           $count_dep = 1;
           $query_dep_first = "INSERT INTO departure (departure, count) VALUES ('$departure','$count_dep')";
           $result_dep_first = mysqli_query($db,$query_dep_first);
   
   
          }
  
}

           
           
?>