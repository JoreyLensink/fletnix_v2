<?php include 'controller/movies.php'; ?>
<?php include 'assets/header.php'; ?>

        <div class="main-index">
            <header id="header-index">
                <h1>Welkom op Fletnix</h1>
                <p>Op Fletnix staan de leukste films voor kinderen. Je kunt hier tientallen films. <br> Van Peter Pan tot
                    aan COCO.
                    Ook leuk om met het hele gezin te bekijken. <br>U kunt onderaan de pagina een account aanmaken.</p>
                <h3>Voor als je gewoon even lekker wilt ontspannen</h3>

            </header>


            <main class="main">
                <div class="movie-header">

                    <!-- code voor top 5 films famillie  -->
                </div>
                <?php $besteFamillie = ValueMovie($dbh, 'Animation', 5);
                ?>
                <?php
                echo '<h2>' . 'De 5 meest bekeken Famillie films van de afgelopen 24 uur!' . '</h2>';

                foreach ($besteFamillie as $movie) {

                    echo "<div class='movie-item'>";
                    echo "<img alt='movie' class='othermovies' src='assets/images/Familie_film.jpg'>";
                    echo "<h2 class='movie-hover-item'>";
                    echo "<span> Animatie </span> . <br>";
                    echo '<span>' . $movie['title'] . '</span>' . '<br>';
                    echo '<span>' . "$" . $movie['price'] . '</span>';
                    echo '<a href="watch.php">' . "<span> Film kijken </span>" . '</a>';
                    echo "</div>";
                }
                ?>


            </main>
            <footer>
                <a class="footer-index" href="subscription.php">
                    Klik hier om een account aan te maken
                </a>
            </footer>
        </div>
    </div>

</body>

</html>