<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header : Celia et Noussaiba-->
    <header class="header-accueil">
        <div class="triangle-down"></div>
        <!-- Nav desktop -->
        <nav class="nav-desktop">
            <ul>
                <li><a href="Home.html">Accueil</a></li>
                <li><a href="About.html">A propos</a></li>
                <li><a href="Programs.html">Nos actions</a></li>
            </ul>
            <!-- <img class="logo" src="img/logo-couleur.png" alt="Logo de l'association Kapital     Jeunesse"> -->
            <ul>
                <li><a href="Donate.html">Dons</a></li>
                <li><a href="Location.html">Localisation</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="logo-accueil">
            <img src="assets/img/logo-couleur.png" alt="Logo de l'association Kapital Jeunesse">
        </div>
        
  </header>

<main>
    <div class="container-contact">
            <h2>Contactez-nous</h2>
            <p id="texte-intro">N’hésitez pas à nous contacter pour toute question, demande d’information ou réservation. Notre équipe dévouée est là pour répondre à vos besoins et vous assister dans l’organisation de votre événement. Chez Kapital Jeunesse, nous sommes à votre écoute pour vous offrir une expérience exceptionnelle et répondre à toutes vos attentes.</p>
    </div>
</main>

<!-- Section formulaire : Noussaiba-->
<section>

<div class="form-container">
        <form action="#" method="post">
            <div class="form-group-name">
                <input type="text" id="nom" name="nom" placeholder="Nom">
                <input type="text" id="prenom" name="prenom" placeholder="Prenom">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <select id="sujet" name="sujet">
                    <option value="demande">Demande d'informations</option>
                    <option value="suggestion">Nos actions</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <textarea id="messages" name="messages" rows="8" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer">
            </div>  
        </form>
    </div>

</section>

<section>
    <div class="faq-container">
        <div class="faq-all-question">
            <div class="faq-question">
                <button class="pointer">
                    <span class="pointer">Quels sont les objectifs de la chaine</span>
                    <span class="pointer"><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <p>L'objectif de notre chaîne est de diffuser la magie de la musique de cinéma en partageant des analyses approfondies et des anecdotes fascinantes. Nous visons à éduquer les amateurs de films en explorant les techniques de composition et en mettant en lumière le rôle crucial de la musique dans la narration cinématographique. Notre but est également d'offrir du divertissement à travers une variété de contenus tout en créant une communauté passionnée où les cinéphiles peuvent partager leur amour pour la musique de film et discuter de leurs œuvres préférées.</p>
            </div>
            <div class="faq-question">
                <button class="pointer">
                    <span class="pointer">Qui est la HugoTeam ?</span>
                    <span><i class="fa-solid fa-chevron-down"></i></span>
                </button>
            <p> La Hugo Team représente toute l'équipe qui m'accompagne et me soutient, que ce soit lors des tournages ou du montage de mes vidéos. Elle est constituée de plusieurs membres : Noussaïba développeuse et assistante graphiste, Ethan le développeur, Walid le Cameraman et chef de projet scénar, , Aya qui fait le son et le scénar, Eduardo le strat réalisateur, Romain le chef de projet pour le montage, Aristide le script et le scénar,  Franck en charge de l'éclairage et du scénario, et enfin Evan également développeur.</p>
            </div>
            <div class="faq-question">
                <button class="pointer">
                    <span class="pointer">Pourquoi les concepts des micro-trottoir ?</span>
                    <span><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <p>Nous avons choisi ce concept pour présenter les compositeurs de musique de film aux gens, en mettant l'accent sur le côté ludique et humoristique à travers les réactions des personnes interrogées lors du micro-trottoir. Notre objectif est de sensibiliser notre public à l'importance des compositeurs dans l'industrie cinématographique tout en les divertissant.</p>
            </div>
        </div>
    </div>
</section>
    

<script src="assets/js/app.js"></script>
</body>
</html>