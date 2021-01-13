<?php
require_once "connection.php";




// //begin code voor films ophalen
function valueMovie($dbh, $genre, $aantal){
$movies      = $dbh->query("SELECT top ($aantal)   Movie.title, Movie.price, Movie.movie_id 
FROM Movie
LEFT JOIN Movie_Genre
ON Movie.movie_id = Movie_Genre.movie_id
WHERE Movie_Genre.genre_name = '$genre' ");
return $movies;
}
     
















?>