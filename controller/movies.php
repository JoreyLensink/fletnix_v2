<?php

$test = 10;

// Naam van server
$hostname = 'host.docker.internal';
// Naam van database
$dbname = 'FLETNIX_DOCENT';
// Hier je eigen gebruikersnaam
$username = 'applicatie';
// Hier je eigen password.
// Zet het wachtwoord in het echt nooit letterlijk in de broncode.
$pw = 'Fletnix1';

// Connectie met de database ofwel de Database Handler (dbh).
$dbh = new PDO("sqlsrv:Server=$hostname;Database=$dbname;ConnectionPooling=0", $username, $pw);
// Tijdens het ontwikkelen is het handig om meteen ook de foutmeldingen vanuit de database te kunnen lezen.
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Een query net zoals we dat wel vaker in SQL doen.
$query = <<<EOD
DROP TABLE IF EXISTS fletnix_user;
CREATE TABLE fletnix_user (
    userID INT PRIMARY KEY IDENTITY(1,1),
    username VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO fletnix_user (username)
VALUES ('student')
EOD;


// //begin code voor films ophalen

$hoogsteID = 250;



function valueMovie($dbh, $genre){
$movies      = $dbh->query("SELECT top (25)   Movie.title, Movie.price, Movie.movie_id 
FROM Movie
LEFT JOIN Movie_Genre
ON Movie.movie_id = Movie_Genre.movie_id
WHERE Movie_Genre.genre_name = '$genre' ");
return $movies;
       
}
     






// Query uitvoeren.
$result = $dbh->exec($query);

// Alle users ophalen.
$users = $dbh->query('SELECT * from fletnix_user');











?>