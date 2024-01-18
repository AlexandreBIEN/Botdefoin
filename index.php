<?php
$title = 'Accueil';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/function.php';

?>

<main>
    <section class="hero-container">
        <div class="hero-side">
            <h1 class="font-sulphur-point hero-title-home">Lorem ipsum dolor sit amet consectetur.</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic itaque molestiae laboriosam, sed ex vero quidem officiis.</p>
            <div class="hero-contact">
                <button class="contact-btn">Nous contacter</button>
                <button class="hero-phone"><img src="/assets/img/solar_phone-calling-bold.svg" alt="icon téléphone"></button><div class="hero-contact-container"><p class="hero-text-contact">Prendre contact</p><a href="tel:0235199191">02 35 19 91 91</a></div>
            </div>
            <!-- <img src="/assets/img/arrow-down-2.png" alt="flèche vers le bas" class="hero-arrow-down"> -->
        </div>
        <div class="hero-side">
            <img src="./assets/img/img-ceuilleur.png" alt="" class="hero-img">
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>