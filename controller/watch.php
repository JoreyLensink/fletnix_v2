<?php
require_once "movies.php";





function loadDirectorsInfo($dbh, $movieID) {

$directorsInfo      = $dbh->prepare(" SELECT * 
FROM PERSON
LEFT JOIN Movie_Director ON Person.person_id = Movie_Director.person_id
LEFT JOIN Movie ON Movie_Director.movie_id = Movie.movie_id
WHERE Movie.movie_id = $movieID AND Movie_Director.person_id IS NOT NULL");
$directorsInfo->execute();
return $directorsInfo;
}

function loadCastInfo($dbh, $movieID) {

    $CastInfo      = $dbh->prepare(" SELECT * , Movie.duration, Movie.publication_year, Movie.description
    FROM PERSON
    LEFT JOIN Movie_Cast ON Person.person_id = Movie_Cast.person_id
    LEFT JOIN Movie ON Movie_Cast.movie_id = Movie.movie_id
    WHERE Movie.movie_id = $movieID AND Movie_Cast.person_id IS NOT NULL ");
    $CastInfo->execute();
    return $CastInfo;
    }


print_r($_POST);
