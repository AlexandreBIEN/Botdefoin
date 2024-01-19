<?php
$title = 'Nos activités';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/function.php';

?>

<main>
    <section class="hero-container">
        <div class="hero-side">
            <h1 class="font-sulphur-point hero-title-home">Botdefoin, on vous aiguille !</h1>
            <p>Imaginez-vous l'odeur d'un vignoble, le partage autours de produits authentiques, un apéro concert dans les vignes, un explor games chez un maraîcher, la fabrication de  fromage à la ferme, c'est ce qu'on appelle vivre une belle expérience à la ferme. Venez rejoindre la communauté Botdefoin, vivre de belles expériences et créer un lien fidèle avec les agriculteurs.</p>
            <div class="hero-contact">
                <button class="contact-btn">Nous contacter</button>
                <button class="hero-phone"><img src="/assets/img/solar_phone-calling-bold.svg" alt="icon téléphone"></button><div class="hero-contact-container"><p class="hero-text-contact">Prendre contact</p><a href="tel:0235199191">02 35 19 91 91</a></div>
            </div>
            <!-- <img src="/assets/img/arrow-down-2.png" alt="flèche vers le bas" class="hero-arrow-down"> -->
        </div>
        <div class="hero-side">
            <img src="./assets/img/img-brouette.png" alt="" class="hero-img">
        </div>
    </section>

    <section class="activite-zone py-2 text-center">
        <div class="nos-activite-activite-zone ">
            <p class="">Nos activités</p>
        </div>
        <h1 class="font-sulphur-point">Top des activités</h1>
        <div>
            <p class="font-Anaheim">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
        </div>

        

        <div class="savoir-plus-activite-zone">
            <a href="#" class="btn btn-light font-inter" id="a-contact-card">En Savoir plus</a>
        </div>
        

    </section>

</main>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>