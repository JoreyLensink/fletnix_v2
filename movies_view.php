<?php
include 'controller/movies.php';
?>

<!DOCTYPE html>

<html lang="nl">

<head>
    <meta charset=utf-8>
    <title>Films</title>
    <link rel="icon" href="assets/images/logo-browser.png">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div id="background">
        <Navigatie balk>
            <div id="navbar">
                <a class="navbar-logo" href="index.php"><img class="logo-nav" src="assets/images/logo.png" alt="logo fletnix"></a>
                <div class="dropdown">
                    <a href="movies_view.php">
                        <div class="dropbtn">Films</div>
                    </a>
                    <div class="dropdown-content">
                        <a href="movies.php#animation">Animatie</a>
                        <a href="movies.php#Comdey">Humor</a>
                        <a href="movies.php#Family">Famillie</a>
                    </div>
                </div>
                <a class="navbar-link" href="about.php">Over ons</a>
                <a class="navbar-link" href="contact.php">Contact</a>
                <a class="navbar-link" href="subscription.php">Abonnementen</a>
                <a class="navbar-link-right" href="account.php"><img class="login-icon" src="assets/images/icon-login.png" alt="icon person"></a> -->
            </div>

            <div class="main">

            <!-- code coor Animatie films -->
                <div class="movie-category">
                <?php $Animation = ValueMovie($dbh, 'Animation', 25); 
                ?>
                    <?php
                echo '<h1>' . 'Animatie' . '</h1>';

                foreach ($Animation as $movie) {

                    echo "<div class='movie-item'>";
                    echo "<img alt='movie' class='othermovies' src='assets/images/COCO.jpg'>";
                    echo "<h2 class='movie-hover-item'>";
                    echo "<span> Animatie </span> . <br>";
                    echo '<span>' . $movie['title'] . '</span>' . '<br>';
                    echo '<span>' . "$" . $movie['price'] . '</span>';
                    echo '<a href="watch.php">' . "<span> Film kijken </span>" . '</a>';
                    echo "</div>";
                }
                    ?>
                    <br />
                    <br />
                    </h2>
                </div>


<!-- code coor Comedy films -->
                <div class="movie-category">
                <?php $Comedy = ValueMovie($dbh, 'Comedy', 25); 
                ?>
                    <?php
                   echo '<h1>' . 'Humor' . '</h1>';

                   foreach ($Comedy as $movie) {

                       echo "<div class='movie-item'>";
                       echo "<img alt='movie' class='othermovies' src='assets/images/Comedy_film.jpg'>";
                       echo "<h2 class='movie-hover-item'>";
                       echo "<span> Humor </span> . <br>";
                       echo '<span>' . $movie['title'] . '</span>' . '<br>';
                       echo '<span>' . "$" . $movie['price'] . '</span>';
                       echo '<a href="watch.php">' . "<span> Film kijken </span>" . '</a>';
                       echo "</div>";
                   }
                    ?>
                    <br />
                    <br />
                    </h2>
                </div>

                <!-- code coor Family films -->
                <div class="movie-category">
                    <?php
                    $Family = ValueMovie($dbh, 'Family', 25);


                    ?>
                    <?php
                    echo '<h1>' . 'Famillie' . '</h1>';

                    foreach ($Family as $movie) {

                        echo "<div class='movie-item'>";
                        echo "<img alt='movie' class='othermovies' src='assets/images/Familie_film.jpg'>";
                        echo "<h2 class='movie-hover-item'>";
                        echo "<span> Famillie </span> . <br>";
                        echo '<span>' . $movie['title'] . '</span>' . '<br>';
                        echo '<span>' . "$" . $movie['price'] . '</span>';
                        echo '<a href="watch.php">' . "<span> Film kijken </span>" . '</a>';
                        echo "</div>";
                    }
                    ?>
                    <br />
                    <br />
                    </h2>
                </div>

            </div>
    </div>

    </div>


</body>

</html>