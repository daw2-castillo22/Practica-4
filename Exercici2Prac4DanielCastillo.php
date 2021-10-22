<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database 
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
	(movie_id, movie_name, movie_type, movie_year, movie_leadactor, movie_director)
VALUES
	(4, "Venom", 7, 2018, 7, 8),
	(5, "La La Land", 9, 2016, 5, 9),
	(6, "Alien", 6, 1970, 10, 11)'; 
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
	(movietype_id, movietype_label)
VALUES
	(9,"Musical"),
	(10, "West"),
	(11, "Suspense")';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query = 'INSERT INTO people
	(people_id, people_fullname, people_isactor, people_isdirector) 
VALUES
	(7, "Tom Hardy", 1, 0),
	(8, "Ruben Fleischer", 0, 1),
	(9, "Damien Chazelle", 0, 1),
	(10,"Sigourney Weaver", 1, 0),
	(11, "Ridley Scott", 0, 1)'; 
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>