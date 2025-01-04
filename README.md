# Présentation du projet n°5 de la formation de développeur Wordpress d'Openclassrooms.

![image](https://github.com/user-attachments/assets/53ac46e5-fb77-49ae-ac3f-db1a97a53674)

![image](https://github.com/user-attachments/assets/ff05bd4c-892e-4116-9c91-34e3180569cb)

# La mission :

Dans le rôle, d’un freelance en développement Web je me suis inscrit sur plusieurs sites pour proposer mes services. J’ai été contacté par Fatima, la responsable de communication de The ArtBox, qui est une galerie d’art moderne, me proposant la mission de refonte de leur site HTML en PHP.

Le site en question est conçu pour présenter les œuvres exposées dans la galerie The ArtBox.

Le site est entièrement développé avec du HTML et CSS pour le style où nous avons une page index.html et 15 autres pages d’œuvres.

Le but de la mission que Fatima m’a confié est de factoriser le code avec du PHP afin de faciliter toute modification et mise à jour du site.

# Pour ce faire :

Après analyse de tout le contenu du code des pages j’ai procédé à sa modification selon les étapes suivantes :

° J’ai créé 2 pages que j’ai nommé header.php et footer.php dans le dossier includes, ou j’ai introduit le code html du Header et du Footer. Par la suite avec l’instruction « INCLUDE » j’ai procédé à l’inclusion de ces bouts de codes dans toutes les pages du site.
  Ainsi j’ai établi la factorisation du Header et du Footer.

° En 2éme étape j’ai créé une page des œuvres que j’ai nommé « œuvres.php » ou j’ai créé un tableau ou j’ai introduit chaque œuvre sous forme d’un tableau associatif.

° En 3éme partie, J’ai créé une page index.php et j’ai inclus tout au début, la page œuvres.php représentant le tableau des œuvres. Ensuite j’ai factorisé le code d’affichage des œuvres en introduisant une boucle dans le code.

° En 4eme partie j’ai créé une page que j’ai nommé œuvre.php qui va me permettre d’afficher l’oeuvre sur laquelle on aura cliqué.

° J’ai inclus tout au début de la page, le tableau des œuvres. Et j’ai récupéré dans une variable  l’identifiant envoyé par URL dans le tableau $_GET.
  Ensuite avec une boucle sur le tableau des œuvres et l’identifiant récupéré dans la variable, j’ai introduit le code PHP et html qui va afficher l’œuvre sur laquelle on aura cliquer sur la page d’accueil .

