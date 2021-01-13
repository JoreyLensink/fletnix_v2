<?php include 'assets/header.php';
include 'controller/watch.php';
?>


<div id="background">
    <main class="main-watch">
        <video id="video" controls>
            <source src="assets/movie-trailer.mp4" type="video/mp4">
        </video>
    </main>
    <div class="movie-infomation">
        <div class="info-left">
            <h3>Samenvatting:</h3>
            <?php
            $directors =  loadDirectorsInfo($dbh, $_POST['selectedMovie']);
            $cast = loadCastInfo($dbh, $_POST['selectedMovie']);
            foreach ($cast as $castInfo) {
            echo '<p> ' . $castInfo['description'] . '</p>';
            break;
            }
                ?>
        </div>
        <div class="info-right">
            <h3>Informatie:</h3>
            <?php

            foreach ($cast as $castInfo) {
                echo '<p><b>' . "Releasejaar: " . '</b>' . $castInfo['publication_year'] . '</p>';
                break;
            }
            echo '<p><b>' . "Regiseuren: " . '</b>';
            foreach ($directors as $director) {
                echo  $director['firstname'] . ' ' . $director['lastname'] . ', ';
            }
            echo '</p>';
            foreach ($cast as $castInfo) {
                echo '<p><b>' . "Duur: " . '</b>' . $castInfo['duration'] . '</p>';
                break;
            }

            foreach ($cast as $castInfo) {
                echo '<p><b>' . "Cast: " . '</b>' . $castInfo['firstname'] . ' ' . $castInfo['lastname'] . ',' . '</p>';
                break;
            }

            ?>
        </div>
    </div>
    <!--    cast, duur, regiseur, -->

</div>
</body>

</html>