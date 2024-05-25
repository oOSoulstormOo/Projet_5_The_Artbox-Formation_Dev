<!-- Intégration du Doctype + balise : head - body - header. -->
<?php require_once 'header.php'; ?>

    <main>
        <div id="liste-oeuvres">
            <!-- Intégration du fichier oeuvres.php pour faire appele a la $oeuvres -->
            <?php require_once 'oeuvres.php'; ?>

            <!-- Boucle "pour chaque" qui affiche les articles avec les élements du tableau correspondant -->
            <?php foreach ($oeuvres as $oeuvre) : ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo ($oeuvre['id']); ?>">
                    <img src=<?php echo ($oeuvre['img']); ?> alt=<?php echo ($oeuvre['title']); ?>>
                    <h2><?php echo ($oeuvre['title']); ?></h2>
                    <p class='description'><?php echo ($oeuvre['description']); ?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Intégration du footer + fermeture des balise body et HTML -->
    <?php require_once 'footer.php'; ?>