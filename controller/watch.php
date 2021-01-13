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

function loadCastInfo($dbh, $movieID) {

    $CastInfo      = $dbh->query(" SELECT * , Movie.duration, Movie.publication_year, Movie.description
    FROM PERSON
    LEFT JOIN Movie_Cast ON Person.person_id = Movie_Cast.person_id
    LEFT JOIN Movie ON Movie_Cast.movie_id = Movie.movie_id
    WHERE Movie.movie_id = $movieID");
    return $CastInfo;
    }


print_r($_POST);







?>