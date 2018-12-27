<<<<<<< HEAD:html/add_from.php
<?php
include('config.php');	
$link = mysqli_connect($server,$user,$password,$database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());


$name = mysqli_real_escape_string($link, $_POST['name']);
$image = mysqli_real_escape_string($link, $_POST['image']);
$maker = mysqli_real_escape_string($link, $_POST['maker']);
$time = mysqli_real_escape_string($link, $_POST['time']);
$medicine = mysqli_real_escape_string($link, $_POST['medicine']);
// Ecape String

// PhPMyAdmin // Sakila and World
echo $name;
echo $image;
echo $maker;
echo $time;
echo $medicine;

$SQLquery = "INSERT INTO Drugs VALUES ((SELECT IFNULL(max(ID)+1,1) from (SELECT ID from Drugs) as ID), '$name','$image','$maker','$time','$medicine')";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
=======
<?php
include('config.php');	
$link = mysqli_connect($server,$user,$password,$database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());


$name = mysqli_real_escape_string($link, $_POST['name']);
$image = mysqli_real_escape_string($link, $_POST['image']);
$maker = mysqli_real_escape_string($link, $_POST['maker']);
$time = mysqli_real_escape_string($link, $_POST['time']);
$medicine = mysqli_real_escape_string($link, $_POST['medicine']);
// Ecape String

// PhPMyAdmin // Sakila and World
echo $name;
echo $image;
echo $maker;
echo $time;
echo $medicine;

$SQLquery = "INSERT INTO DrugsNew VALUES ((SELECT IFNULL(max(ID)+1,1) from (SELECT ID from DrugsNew) as ID), '$name','$image','$maker','$time','$medicine')";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
>>>>>>> 2be376c17647d18ca04e5f72b2af00d9ecc84318:add_from.php
?>