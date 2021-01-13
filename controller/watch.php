<?php

function movieInformtion($dbh, $movieID){
    $movies      = $dbh->query("SELECT Movie.duration, Movie.publication_year, Movie.movie_id, Person.firstname, Person.firstname
FROM Movie
LEFT JOIN Person
ON Movie.movie_id = Person.person_id
WHERE Movie.movie_id =  '$movieID' ");
}

?>