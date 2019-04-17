<!doctype html>
<html>
<head>
    <?php include_once 'views/includes/head.php' ?>



    <title> <?= ucfirst($page) ?> - Mon site  </title>
</head>
<body>
<?php include_once 'views/includes/header.php' ?>
<div class="article">
<h1>Nos artcicles ! </h1>
<p> Découvrez notre sélections d'article incroyable ! </p>
</div>
<div class="article">
    <h2>La découverte d'un Trous-Noire !</h2>
    <img src="assets/images/trounoire.jpeg" alt="">
    <p>Il y a quelques semaine un Trou-Noire à étais identifier par des scientifiques,
        les premiéres images sont tomber ! <a href="index.php?page=articlea">Cliquez-ici !</a> </p>
    <h2>Une nouvelle exoplanete ?</h2>
    <img src="assets/images/exoplanete.png" alt="">
    <p>D'apres certaine recherche une nouvelle expoplanéte aurrait étais découvert dans une galaxie voisine
        pour en apprendre plus <a href="">Cliquez ici !</a></p>
    <h2>Les constellations et leurs mystéres</h2>
    <img src="assets/images/constellation.jpg" alt="">
    <p>Cette article concerne les différents constellations et les mystéres qu'elle abrite.Pour en apprendre plus<a href="">Cliquez-ici !</a> </p>
</div>

<?php include_once 'views/includes/footer.php' ?>

</body>
</html>