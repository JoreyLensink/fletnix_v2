<?php
require_once "movies.php";





function loadDirectorsInfo($dbh, $movieID) {

$directorsInfo      = $dbh->query(" SELECT * 
FROM PERSON
LEFT JOIN Movie_Director ON Person.person_id = Movie_Director.person_id
LEFT JOIN Movie ON Movie_Director.movie_id = Movie.movie_id
WHERE Movie.movie_id = $movieID");
return $directorsInfo;
}


print_r($_POST);







?>