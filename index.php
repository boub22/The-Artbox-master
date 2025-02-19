
    <!-- Intégration du header -->
    <?php require_once(__DIR__ . '../header.php'); ?>
    <main>
        <div id="liste-oeuvres">
            <?php
            // Appel du tableau
            require_once(__DIR__ . '../oeuvres.php');
            // Boucle afficher les oeuvres
            foreach ($oeuvres as $oeuvres) {
                echo "<article class='oeuvre'>
                            <a href=oeuvre.php?id=" . $oeuvres['oeuvreNum'] . ">
                                <img src=" . $oeuvres['scrImg'] . " alt=" . $oeuvres['title'] . ">
                                <h2>" . $oeuvres['title'] . "</h2>
                                <p class='description'>" . $oeuvres['author'] . "</p>
                            </a>
                        </article>";
            }
            ?>
        </div>
    </main>
    <!-- Intégration du footer -->
    <?php require_once(__DIR__ . '../footer.php'); ?>
</body>

</html>