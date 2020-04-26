<!doctype html>
<html lang="en">

<head>  
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- scrips to make accordion work -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    //accordion function
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body class="container">
  

<?php

//this will let you access db_connection file
include "db_connection.php";


//gets keyword from add_data.php and stores it 
$keywordfromform = $_GET["keyword"];


//search the database for the keyword

//created a variable that collects data from selected table in the database
//uses keyword to find specific pages
$sql = "SELECT pg, h1, h2, h3, p1, p2 ,p3, img1, img2, img3 FROM pages WHERE pg LIKE '%". $keywordfromform  . "%'";
$result = $mysqli->query($sql);


?>


<div id="contain">
<h1>sources from our database</h1>

<div id="accordion"> 
<?php
//display data if data is found
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) 
    { 
        //displays the data from each table in these formats
        echo "<h3> $row[h1]</h3>";
        echo "<p> $row[p1]</p>";
        echo "<p> $row[h2]</p>";
        echo "<p> $row[p2]</p>";
        echo "<p> $row[h3]</p>";
        echo "<p> $row[p3]</p>";
        echo "<p>images</p>";
        echo "<div><img src='{$row[img1]}'><img src='{$row[img2]}'><img src='{$row[img3]}'></div>";
        
       
    }
 
}

?>
</div>
</div>


 
</body>