<?php
//this is what connects my files to the database


// four variables that connect to the database
$host = "localhost";
$username = "a2700635_scp1user";
$user_pass = "tongariro66";
$database = "a2700635_scp1";

//create a database object or instance
$mysqli = new mysqli($host, $username, $user_pass, $database) or die(mysqli_error($mysqli));


//checks to see if pg field had any input in it
if(isset($_POST['pg']))
{

//Get information when using post function and store into these variables
$pg = $_POST['pg'];

$h1 = $_POST['h1'];
$p1 = $_POST['p1'];
$img1 = $_POST['img1'];

$h2 = $_POST['h2'];
$p2 = $_POST['p2'];
$img2 = $_POST['img2'];

$h3 = $_POST['h3'];
$p3 = $_POST['p3'];

$img3 = $_POST['img3'];



//inserts the created variables into the database
$sql = "INSERT INTO pages(pg, h1, h2, h3, p1, p2 ,p3, img1, img2, img3) 
VALUES('$pg', '$h1', '$h2', '$h3', '$p1', '$p2', '$p3', '$img1', '$img2', '$img3')";



//if and if not successful
if($mysqli->query($sql) === TRUE)
{
    
    echo "
    <h1>Record was successfully put into the database!</h1>
    <p><a href='./index.php'>return to main page</a></p>";

}
else
{

    
    echo "hello<h1>yikes!. data did not go through</h1>
     <p><a href='./index.php'>back to index page </a></p>";
}


}
?>


