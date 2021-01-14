<?php
require_once "connection.php";

// //begin code voor films ophalen
function valueMovie($dbh, $genre, $aantal){
$movies      = $dbh->query("SELECT top ($aantal)   Movie.title, Movie.price, Movie.movie_id 
FROM Movie
LEFT JOIN Movie_Genre ON Movie.movie_id = Movie_Genre.movie_id
LEFT JOIN Movie_Cast ON Movie.movie_id = Movie_Cast.movie_id
LEFT JOIN Movie_Director ON Movie.movie_id = Movie_Director.movie_id
WHERE Movie_Genre.genre_name = '$genre' AND Movie_Cast.person_id IS NOT NULL AND Movie_Director.person_id IS NOT NULL
GROUP BY Movie.movie_id, Movie.title, Movie.price ");
return $movies;
}
     
?>