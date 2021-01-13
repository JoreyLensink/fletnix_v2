<?php include 'controller/movies.php'; ?>
<?php include 'assets/header.php'; ?>

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