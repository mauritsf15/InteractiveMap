<?php
    include '../classes/Stores.php';
    $levis = new Stores("Levi's", "Kleding die gemaakt is om alles te verduren", "levis.jpg", "https://levis.nl");
    $mybrand = new Stores("MyBrand", "MyBrand is een high-end kledingmerk.", "mybrand.webp", "https://www.my-brand.com/nl/");
    $schiesser = new Stores("Schiesser", "Bij SCHIESSER is er voor iedereen die op zoek is naar het perfecte feelgood-moment, wat wils. Wij bieden online dames– en herenkleding alsook kinderkleding voor jongens, meisjes en de allerkleinsten", "schiesser.webp", "https://www.schiesser.com/nl/");
    $muchachomalo = new Stores("Muchachomalo", "Een moderne winkel waar mannen niet bang hoeven te zijn om een lingeriewinkel binnen te lopen", "muchachomalo.png", "https://www.muchachomalo.com");
    $creuset = new Stores("Le Creuset", "Van dageraad tot zonsondergang, geef uw keuken en interieur een onverwacht vleugje kleur.", "creuset.png", "https://www.lecreuset.nl/nl_NL/");
    $mcd = new Stores("McDonald's", "McDonald's is de populairste fast food keten in de hele wereld.", "mcd.png", "https://www.mcdonalds.com/nl/");
    $vingino = new Stores("Vingino", "Vingino is een internationaal denim lifestyle merk voor kinderen, geïnspireerd door Italiaans design.", "vingino.png", "https://www.vingino.com/nl/");
    $goldie = new Stores("Goldie Estelle", "Het luxueuze merk Goldie Estelle is gebaseerd op de twee voornamen van de eigenaresse.", "goldie.png", "https://www.goldie-estelle.com/");
    $ccc = new Stores("Chocolate Compagne Cafe", "Kwaliteitschocolade die je elke keer weer verrast", "ccc.jpg", "https://www.chocolatecompany.nl/nl/");
    $bahn = new Stores("Banh Mi 101", "Vietnamees street en fast food restaurant", "banh.png", "");

    if (isset($_GET['name'])) {
        $nameid = $_GET['name'];
    }

?>

<html lang="en">
<head>
    <title>Batavia stad plattegrond</title>
    <link href="css/style.css?v=<? random() ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img class="mapimg" src="img/img.png" alt="Workplace" usemap="#workmap" width="700">
        <map name="workmap">
            <area shape="rect" coords="90,80,310,260" alt="Levi's" href="/index.html?name=levis">
            <area shape="rect" coords="310,120,390,260" alt="My Brand" href="/index.html?name=mybrand">
            <area shape="rect" coords="390,130,470,260" alt="Schiesser" href="/index.html?name=schiesser">
            <area shape="rect" coords="90,300,150,370" alt="Muchachomalo" href="/index.html?name=muchachomalo">
            <area shape="rect" coords="90,375,150,510" alt="Le Creuset" href="/index.html?name=creuset">
            <area shape="rect" coords="150,300,390,520" alt="McDonald's" href="/index.html?name=mcd">
            <area shape="rect" coords="390,375,470,530" alt="Vingino" href="/index.html?name=vingino">
            <area shape="rect" coords="470,330,550,540" alt="Goldie Estelle" href="/index.html?name=goldie">
            <area shape="rect" coords="470,260,630,330" alt="Chocolate Compagne Cafe" href="/index.html?name=ccc">
            <area shape="rect" coords="550,330,635,375" alt="Banh Mi 101" href="/index.html?name=bahn">
        </map>
        <div class="modal-wrapper">
            <div class="modal">
                <h2><?php echo $$nameid->getName() ?></h2>
                <p><?php echo $$nameid->getDescription() ?></p>
                <img class="modal-img" src="img/<?php echo $$nameid->getImg() ?>" alt="image"><br>
                <a href="<?php echo $$nameid->getLink() ?>"><?php echo $$nameid->getLink() ?></a>
            </div>
        </div>


    </div>
    <script src="js/main.js?v=<? random() ?>" type="application/javascript"></script>
    <?php

    echo '<script type="application/javascript">';
    if ($nameid != null) {
        echo 'openModal()';
    }
    echo '</script>';
    ?>
</body>
</html>
