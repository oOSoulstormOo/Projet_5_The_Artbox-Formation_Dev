<!-- Intégration du Doctype + balise : head - body - header -->
<?php require_once 'header.php'; ?>

<main>
    <!-- Le fichier oeuvres.php qui possède la $oeuvres contenant notre tableau -->
    <?php require_once 'oeuvres.php'; ?>
    <!-- On vérifie si l'ID est présent dans l'URL -->
    <?php if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];//préciser qu'il s'agit d'un entier que l'on veut récuperer...par défaut, c'est une chaine de caractère.
            $oeuvretrouve = null; 
    };
    ?>
    <!-- Si il est présent, on cherche l'oeuvre correspondante a cette id dans le tableau -->
    <?php foreach ($oeuvres as $oeuvre) {
            if ($oeuvre['id'] === $id) {
                $oeuvretrouve = $oeuvre;// on retourne la $oeuvretrouve comme étant l'oeuvre voulu
                break;// et on arrête de chercher
            }
    }; ?>
    
    <!-- Si l'oeuvre est trouvé, on affiche les détails de celle-ci -->
    <?php if ($oeuvretrouve) : ?>
        <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src= "img/<?php echo ($oeuvretrouve['img']); ?>" alt=<?php echo ($oeuvretrouve['title']); ?>>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo ($oeuvretrouve['title']); ?></h1>
            <p class="description"><?php echo ($oeuvretrouve['description']); ?></p>
            <p class="description-complete"><?php echo ($oeuvretrouve['complete_description']); ?></p>
        </div>
    </article>
    
    <?php endif; ?>
    
</main>
    <!-- Intégration du footer + fermeture des balise body et HTML -->
    <?php require_once 'footer.php'; ?>