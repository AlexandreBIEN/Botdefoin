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
            <div class="bg-light rounded shadow-lg px-4 py-2 d-flex d-inline-flex justify-content-around" style="position: absolute; top: 52%; left: 77%; transform: translate(-50%, -50%);">
                    <h2 class="mt-1 mb-2 text-warning fs-2 mr-5 text-start justify-content-around">?      </h2>
                    <h5 class=" text-end mt-3 justify-content-around" >Qui sommes-nous ?</h5>    
            </div>
            <div class="bg-light rounded shadow-lg px-4 py-2" style="position: absolute; top: 72%; left: 47%; transform: translate(-50%, -50%); z-index: -1;">
                    <h4 class="mt-1 mb-2">Nombres d'activités</h4>
                    <h1 class="text-warning text-start fw-bold " >15</h1>    
            </div>
            <img src="./assets/img/img-brouette.png" alt="" class="hero-img">
        </div>
    </section>

    <section class="activite-zone py-2 text-center">
        <div class="nos-activite-activite-zone ">
            <p class="my-2 text-center">Nos activités</p>
        </div>
        <h1 class="font-sulphur-point mb-5">Top des <span class="text-warning">activités</span></h1>
        <div>
            <p class="font-Anaheim fs-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
        </div>

        <div class="row row-cols-2 row-cols-md-2 g-4">
            <div class="col">
                <div class="card text-bg-dark card-activite-top m-5 text-start d-flex align-items-end flex-column mb-3 col" >
                    <img src="./assets/img/image_1.png" class="card-img w-100 h-25" alt="..." >
                    <div class="card-img-overlay">
                        <div class="px-auto mx-auto text-start d-flex justify-content-between rounded">
                            <h5 class="price-font text-dark mx-auto p-2 text-start rounded">50€ / perso</h5>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.7375 33L11.175 22.4625L3 15.375L13.8 14.4375L18 4.5L22.2 14.4375L33 15.375L24.825 22.4625L27.2625 33L18 27.4125L8.7375 33Z" fill="white"/>
                            </svg>

                        </div>
                        <div class="text-card-top-activite">
                            <h5 class="card-title p-2 align-items-end fs-2">Nous sommes Botdefoin</h5>
                            <p class="footer-yellow-line mb-1"/>
                            <p class="card-text p-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark card-activite-top m-5 text-start d-flex align-items-end flex-column mb-3 col" >
                    <img src="./assets/img/image_1.png" class="card-img w-100 h-25" alt="..." >
                    <div class="card-img-overlay">
                        <div class="px-auto mx-auto text-start d-flex justify-content-between rounded">
                            <h5 class="price-font text-dark mx-auto p-2 text-start rounded">50€ / perso</h5>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.7375 33L11.175 22.4625L3 15.375L13.8 14.4375L18 4.5L22.2 14.4375L33 15.375L24.825 22.4625L27.2625 33L18 27.4125L8.7375 33Z" fill="white"/>
                            </svg>

                        </div>
                        <div class="text-card-top-activite">
                            <h5 class="card-title p-2 align-items-end fs-2">Nous sommes Botdefoin</h5>
                            <p class="footer-yellow-line mb-1"/>
                            <p class="card-text p-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        
                    </div>
                </div>
            </div>  
        </div>

        <div class="row row-cols-2 row-cols-md-3 g-4 mx-auto">
            <div class="col">
                <div class="card text-bg-dark card-activite-top m-5 text-start d-flex align-items-end flex-column mb-3 col" style="width: 500px;">
                    <img src="./assets/img/image_1.png" class="card-img img-fluid w-100 h-25" alt="..." >
                    <div class="card-img-overlay">
                        <div class="px-auto mx-auto text-start d-flex justify-content-between rounded">
                            <h5 class="price-font text-dark mx-auto p-2 text-start rounded">50€ / perso</h5>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.7375 33L11.175 22.4625L3 15.375L13.8 14.4375L18 4.5L22.2 14.4375L33 15.375L24.825 22.4625L27.2625 33L18 27.4125L8.7375 33Z" fill="white"/>
                            </svg>

                        </div>
                        <div class="text-card-top-activite-little">
                            <h2 class="card-title p-2 align-items-end">Nous sommes Botdefoin</h2>
                            <p class="footer-yellow-line mb-1"/>
                            
                        </div>
                        
                    </div>
                </div>
            </div> 
            <div class="col">
                <div class="card text-bg-dark card-activite-top m-5 text-start d-flex align-items-end flex-column mb-3 col" style="width: 500px;">
                    <img src="./assets/img/image_1.png" class="card-img img-fluid w-100 h-25" alt="..." >
                    <div class="card-img-overlay">
                        <div class="px-auto mx-auto text-start d-flex justify-content-between rounded">
                            <h5 class="price-font text-dark mx-auto p-2 text-start rounded">50€ / perso</h5>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.7375 33L11.175 22.4625L3 15.375L13.8 14.4375L18 4.5L22.2 14.4375L33 15.375L24.825 22.4625L27.2625 33L18 27.4125L8.7375 33Z" fill="white"/>
                            </svg>

                        </div>
                        <div class="text-card-top-activite-little">
                            <h2 class="card-title p-2 align-items-end">Nous sommes Botdefoin</h2>
                            <p class="footer-yellow-line mb-1"/>
                            
                        </div>
                        
                    </div>
                </div>
            </div> 
            <div class="col mr-5">
                <div class="card text-bg-dark card-activite-top m-5 text-start d-flex align-items-end flex-column mb-3 col" style="width: 500px;">
                    <img src="./assets/img/image_1.png" class="card-img img-fluid w-100 h-25" alt="..." >
                    <div class="card-img-overlay">
                        <div class="px-auto mx-auto text-start d-flex justify-content-between rounded">
                            <h5 class="price-font text-dark mx-auto p-2 text-start rounded">50€ / perso</h5>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.7375 33L11.175 22.4625L3 15.375L13.8 14.4375L18 4.5L22.2 14.4375L33 15.375L24.825 22.4625L27.2625 33L18 27.4125L8.7375 33Z" fill="white"/>
                            </svg>

                        </div>
                        <div class="text-card-top-activite-little">
                            <h2 class="card-title p-2 align-items-end">Nous sommes Botdefoin</h2>
                            <p class="footer-yellow-line mb-1"/>
                            
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div>

        

        <div class="savoir-plus-activite-zone">
            <a href="#" class="btn btn-light font-inter" id="a-contact-card">En Savoir plus</a>
        </div>
        

    </section>

</main>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>