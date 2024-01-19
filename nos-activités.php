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


    <section>
        <div class="nos-activite-activite-zone ">
            <p class="my-2 text-center">Nos meilleurs choix</p>
        </div>
        <h1 class="font-sulphur-point mb-5 text-center">Top des <span class="text-warning">activités</span></h1>
        <div>
            <p class="font-Anaheim fs-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
        </div>

        <div class="bg-light shadow-lg text-center d-flex m-5 justify-content-around align-items-center rounded px-1">
            <nav class="navbar navbar-expand-lg bg-body-tertiary text-center">
                <div class="container-fluid">
                    <form class="d-flex search-bar-font rounded" role="search">
                        <input class="form-control me-2 search-bar-font border-0" type="search" placeholder="Rechercher" aria-label="Search">
                        
                        <button class="btn" type="submit">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.375 23.1378L17.767 16.5298C19.355 14.6234 20.1468 12.1783 19.9779 9.70296C19.8089 7.22764 18.6921 4.91276 16.8599 3.23987C15.0276 1.56698 12.6209 0.66488 10.1405 0.72124C7.66007 0.777601 5.29685 1.78808 3.54246 3.54246C1.78808 5.29685 0.777601 7.66007 0.72124 10.1405C0.66488 12.6209 1.56698 15.0276 3.23987 16.8599C4.91276 18.6921 7.22764 19.8089 9.70296 19.9779C12.1783 20.1468 14.6234 19.355 16.5298 17.767L23.1378 24.375L24.375 23.1378ZM2.50004 10.375C2.50004 8.81751 2.9619 7.29496 3.82722 5.99992C4.69253 4.70489 5.92244 3.69553 7.36141 3.09949C8.80038 2.50345 10.3838 2.3475 11.9114 2.65136C13.439 2.95521 14.8422 3.70524 15.9435 4.80657C17.0448 5.90791 17.7949 7.3111 18.0987 8.8387C18.4026 10.3663 18.2466 11.9497 17.6506 13.3887C17.0546 14.8276 16.0452 16.0575 14.7502 16.9229C13.4551 17.7882 11.9326 18.25 10.375 18.25C8.28717 18.2477 6.28548 17.4173 4.80913 15.9409C3.33279 14.4646 2.50236 12.4629 2.50004 10.375Z" fill="black"/></svg>     
                        </button>
                    </form>

                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <div class="search-bar-font rounded mx-5 py-1 d-flex justify-content-center align-items-center">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ml-5" style="--bs-scroll-height: 100px;">   
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Domaine</a>                          
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Domaine 1 </a></li>
                                        <li><a class="dropdown-item" href="#">Domaine 2 </a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Domain x</a></li>
                                    </ul>
                                </li>   
                            </ul>
                        </div>
                        <div class="search-bar-font rounded mx-5 py-1 d-flex justify-content-center align-items-center">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ml-5" style="--bs-scroll-height: 100px;">   
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Domaine</a>                          
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Domaine 1 </a></li>
                                        <li><a class="dropdown-item" href="#">Domaine 2 </a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Domain x</a></li>
                                    </ul>
                                </li>   
                            </ul>
                        </div>
                        <div class="search-bar-font rounded mx-5 py-1 d-flex justify-content-center align-items-center">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ml-5" style="--bs-scroll-height: 100px;">   
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Domaine</a>                          
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Domaine 1 </a></li>
                                        <li><a class="dropdown-item" href="#">Domaine 2 </a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Domain x</a></li>
                                    </ul>
                                </li>   
                            </ul>
                        </div> 
                    </div>
                </div>
                <div class="d-flex">
                    <a href="#" class="btn btn-warning font-inter mx-auto" id="a-contact-card">En Savoir plus</a>
                </div>
            </nav>
            
        </div>



        <div class="row row-cols-md-3 m-5 ">



            <div class="col mx-auto">
                <div class="card" style="width: 18rem; ">
                    <img src="./assets/img/image_1.png" class="card-img-top rounded mx-auto mt-1" alt="image pic-nic" style="width: 17rem;" >
                    <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 8%; left: 88%; transform: translate(-50%, -50%);">
                        <g filter="url(#filter0_d_40_8)">
                            <circle cx="47" cy="47" r="21" fill="#FAFAFA"/>
                            <circle cx="47" cy="47" r="20.5" stroke="#F8D32A"/>
                        </g>
                        <path d="M39.3538 43.334C39.7491 46.693 42.7971 49.6372 46.5024 49.6372C50.4765 49.6372 53.6975 46.2521 53.6975 42.5991C53.6975 42.5679 53.6954 42.5375 53.695 42.5076C49.5952 41.9511 44.372 44.93 39.3538 43.334Z" fill="#F8D32A"/>
                        <path d="M55.7812 42.6252C55.7812 37.8146 53.3728 34.8438 53.3728 34.8438H39.6268C39.6268 34.8438 37.2188 37.8188 37.2188 42.6252C37.2188 47.1933 41.1236 51.4365 46.0338 51.6909C45.9765 54.3437 45.7508 57.1061 45.1011 58.0629C44.186 59.4112 40.9789 58.7185 40.9789 60.1563H52.0223C52.0223 58.7181 48.814 59.4112 47.8989 58.0629C47.2493 57.1061 47.0235 54.3441 46.9662 51.6909C51.8751 51.4369 55.7812 47.1933 55.7812 42.6252ZM46.5 50.5603C42.3682 50.5603 38.9695 47.2777 38.5291 43.5327C38.496 43.261 38.479 42.9875 38.478 42.7138C38.478 38.5584 40.5592 35.9875 40.5592 35.9875H52.4404C52.4404 35.9875 54.4848 38.5141 54.519 42.6117C54.5194 42.6455 54.522 42.6788 54.522 42.7138C54.522 46.7862 50.9305 50.5603 46.5 50.5603Z" fill="#F8D32A"/>
                        <defs>
                            <filter id="filter0_d_40_8" x="0" y="0" width="102" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_40_8"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_40_8"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_40_8" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <div class="card-body text-start ">
                        <svg width="8" height="50" viewBox="0 0 8 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 55%; left: 1%; transform: translate(-50%, -50%);">
                            <path d="M0 0H5C6.65685 0 8 1.34315 8 3V47C8 48.6569 6.65685 50 5 50H0V0Z" fill="#F8D32A"/>
                        </svg>
                        <h5 class="card-title font-sulphur-point">Lorem Ipsum del marre</h5>
                        <small class="card-text font-Anaheim">Lorem ipsum dolor sit amet</small>
                    </div>
                    <div class="card-footer bg-white font-Anaheim ">
                        <p class="card-text bg-white text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#" class="btn btn-warning " id="a-contact-card">Nous contacter</a>
                    </div>
                </div>
            </div>
            
            <div class="col mx-auto">
                <div class="card" style="width: 18rem; ">
                    <img src="./assets/img/image_1.png" class="card-img-top rounded mx-auto mt-1" alt="image pic-nic" style="width: 17rem;" >
                    <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 8%; left: 88%; transform: translate(-50%, -50%);">
                        <g filter="url(#filter0_d_40_8)">
                            <circle cx="47" cy="47" r="21" fill="#FAFAFA"/>
                            <circle cx="47" cy="47" r="20.5" stroke="#F8D32A"/>
                        </g>
                        <path d="M39.3538 43.334C39.7491 46.693 42.7971 49.6372 46.5024 49.6372C50.4765 49.6372 53.6975 46.2521 53.6975 42.5991C53.6975 42.5679 53.6954 42.5375 53.695 42.5076C49.5952 41.9511 44.372 44.93 39.3538 43.334Z" fill="#F8D32A"/>
                        <path d="M55.7812 42.6252C55.7812 37.8146 53.3728 34.8438 53.3728 34.8438H39.6268C39.6268 34.8438 37.2188 37.8188 37.2188 42.6252C37.2188 47.1933 41.1236 51.4365 46.0338 51.6909C45.9765 54.3437 45.7508 57.1061 45.1011 58.0629C44.186 59.4112 40.9789 58.7185 40.9789 60.1563H52.0223C52.0223 58.7181 48.814 59.4112 47.8989 58.0629C47.2493 57.1061 47.0235 54.3441 46.9662 51.6909C51.8751 51.4369 55.7812 47.1933 55.7812 42.6252ZM46.5 50.5603C42.3682 50.5603 38.9695 47.2777 38.5291 43.5327C38.496 43.261 38.479 42.9875 38.478 42.7138C38.478 38.5584 40.5592 35.9875 40.5592 35.9875H52.4404C52.4404 35.9875 54.4848 38.5141 54.519 42.6117C54.5194 42.6455 54.522 42.6788 54.522 42.7138C54.522 46.7862 50.9305 50.5603 46.5 50.5603Z" fill="#F8D32A"/>
                        <defs>
                            <filter id="filter0_d_40_8" x="0" y="0" width="102" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_40_8"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_40_8"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_40_8" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <div class="card-body text-start ">
                        <svg width="8" height="50" viewBox="0 0 8 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 55%; left: 1%; transform: translate(-50%, -50%);">
                            <path d="M0 0H5C6.65685 0 8 1.34315 8 3V47C8 48.6569 6.65685 50 5 50H0V0Z" fill="#F8D32A"/>
                        </svg>
                        <h5 class="card-title font-sulphur-point">Lorem Ipsum del marre</h5>
                        <small class="card-text font-Anaheim">Lorem ipsum dolor sit amet</small>
                    </div>
                    <div class="card-footer bg-white font-Anaheim ">
                        <p class="card-text bg-white text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#" class="btn btn-warning " id="a-contact-card">Nous contacter</a>
                    </div>
                </div>
            </div>

            <div class="col mx-auto">
                <div class="card" style="width: 18rem; ">
                    <img src="./assets/img/image_1.png" class="card-img-top rounded mx-auto mt-1" alt="image pic-nic" style="width: 17rem;" >
                    <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 8%; left: 88%; transform: translate(-50%, -50%);">
                        <g filter="url(#filter0_d_40_8)">
                            <circle cx="47" cy="47" r="21" fill="#FAFAFA"/>
                            <circle cx="47" cy="47" r="20.5" stroke="#F8D32A"/>
                        </g>
                        <path d="M39.3538 43.334C39.7491 46.693 42.7971 49.6372 46.5024 49.6372C50.4765 49.6372 53.6975 46.2521 53.6975 42.5991C53.6975 42.5679 53.6954 42.5375 53.695 42.5076C49.5952 41.9511 44.372 44.93 39.3538 43.334Z" fill="#F8D32A"/>
                        <path d="M55.7812 42.6252C55.7812 37.8146 53.3728 34.8438 53.3728 34.8438H39.6268C39.6268 34.8438 37.2188 37.8188 37.2188 42.6252C37.2188 47.1933 41.1236 51.4365 46.0338 51.6909C45.9765 54.3437 45.7508 57.1061 45.1011 58.0629C44.186 59.4112 40.9789 58.7185 40.9789 60.1563H52.0223C52.0223 58.7181 48.814 59.4112 47.8989 58.0629C47.2493 57.1061 47.0235 54.3441 46.9662 51.6909C51.8751 51.4369 55.7812 47.1933 55.7812 42.6252ZM46.5 50.5603C42.3682 50.5603 38.9695 47.2777 38.5291 43.5327C38.496 43.261 38.479 42.9875 38.478 42.7138C38.478 38.5584 40.5592 35.9875 40.5592 35.9875H52.4404C52.4404 35.9875 54.4848 38.5141 54.519 42.6117C54.5194 42.6455 54.522 42.6788 54.522 42.7138C54.522 46.7862 50.9305 50.5603 46.5 50.5603Z" fill="#F8D32A"/>
                        <defs>
                            <filter id="filter0_d_40_8" x="0" y="0" width="102" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_40_8"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_40_8"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_40_8" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <div class="card-body text-start ">
                        <svg width="8" height="50" viewBox="0 0 8 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 55%; left: 1%; transform: translate(-50%, -50%);">
                            <path d="M0 0H5C6.65685 0 8 1.34315 8 3V47C8 48.6569 6.65685 50 5 50H0V0Z" fill="#F8D32A"/>
                        </svg>
                        <h5 class="card-title font-sulphur-point">Lorem Ipsum del marre</h5>
                        <small class="card-text font-Anaheim">Lorem ipsum dolor sit amet</small>
                    </div>
                    <div class="card-footer bg-white font-Anaheim ">
                        <p class="card-text bg-white text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#" class="btn btn-warning " id="a-contact-card">Nous contacter</a>
                    </div>
                </div>
            </div>

            <div class="col mx-auto  py-5 ">
                <div class="card" style="width: 18rem; ">
                    <img src="./assets/img/image_1.png" class="card-img-top rounded mx-auto mt-1" alt="image pic-nic" style="width: 17rem;" >
                    <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 8%; left: 88%; transform: translate(-50%, -50%);">
                        <g filter="url(#filter0_d_40_8)">
                            <circle cx="47" cy="47" r="21" fill="#FAFAFA"/>
                            <circle cx="47" cy="47" r="20.5" stroke="#F8D32A"/>
                        </g>
                        <path d="M39.3538 43.334C39.7491 46.693 42.7971 49.6372 46.5024 49.6372C50.4765 49.6372 53.6975 46.2521 53.6975 42.5991C53.6975 42.5679 53.6954 42.5375 53.695 42.5076C49.5952 41.9511 44.372 44.93 39.3538 43.334Z" fill="#F8D32A"/>
                        <path d="M55.7812 42.6252C55.7812 37.8146 53.3728 34.8438 53.3728 34.8438H39.6268C39.6268 34.8438 37.2188 37.8188 37.2188 42.6252C37.2188 47.1933 41.1236 51.4365 46.0338 51.6909C45.9765 54.3437 45.7508 57.1061 45.1011 58.0629C44.186 59.4112 40.9789 58.7185 40.9789 60.1563H52.0223C52.0223 58.7181 48.814 59.4112 47.8989 58.0629C47.2493 57.1061 47.0235 54.3441 46.9662 51.6909C51.8751 51.4369 55.7812 47.1933 55.7812 42.6252ZM46.5 50.5603C42.3682 50.5603 38.9695 47.2777 38.5291 43.5327C38.496 43.261 38.479 42.9875 38.478 42.7138C38.478 38.5584 40.5592 35.9875 40.5592 35.9875H52.4404C52.4404 35.9875 54.4848 38.5141 54.519 42.6117C54.5194 42.6455 54.522 42.6788 54.522 42.7138C54.522 46.7862 50.9305 50.5603 46.5 50.5603Z" fill="#F8D32A"/>
                        <defs>
                            <filter id="filter0_d_40_8" x="0" y="0" width="102" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_40_8"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_40_8"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_40_8" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <div class="card-body text-start ">
                        <svg width="8" height="50" viewBox="0 0 8 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 55%; left: 1%; transform: translate(-50%, -50%);">
                            <path d="M0 0H5C6.65685 0 8 1.34315 8 3V47C8 48.6569 6.65685 50 5 50H0V0Z" fill="#F8D32A"/>
                        </svg>
                        <h5 class="card-title font-sulphur-point">Lorem Ipsum del marre</h5>
                        <small class="card-text font-Anaheim">Lorem ipsum dolor sit amet</small>
                    </div>
                    <div class="card-footer bg-white font-Anaheim ">
                        <p class="card-text bg-white text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#" class="btn btn-warning " id="a-contact-card">Nous contacter</a>
                    </div>
                </div>
            </div>

            <div class="col mx-auto py-5">
                <div class="card" style="width: 18rem; ">
                    <img src="./assets/img/image_1.png" class="card-img-top rounded mx-auto mt-1" alt="image pic-nic" style="width: 17rem;" >
                    <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 8%; left: 88%; transform: translate(-50%, -50%);">
                        <g filter="url(#filter0_d_40_8)">
                            <circle cx="47" cy="47" r="21" fill="#FAFAFA"/>
                            <circle cx="47" cy="47" r="20.5" stroke="#F8D32A"/>
                        </g>
                        <path d="M39.3538 43.334C39.7491 46.693 42.7971 49.6372 46.5024 49.6372C50.4765 49.6372 53.6975 46.2521 53.6975 42.5991C53.6975 42.5679 53.6954 42.5375 53.695 42.5076C49.5952 41.9511 44.372 44.93 39.3538 43.334Z" fill="#F8D32A"/>
                        <path d="M55.7812 42.6252C55.7812 37.8146 53.3728 34.8438 53.3728 34.8438H39.6268C39.6268 34.8438 37.2188 37.8188 37.2188 42.6252C37.2188 47.1933 41.1236 51.4365 46.0338 51.6909C45.9765 54.3437 45.7508 57.1061 45.1011 58.0629C44.186 59.4112 40.9789 58.7185 40.9789 60.1563H52.0223C52.0223 58.7181 48.814 59.4112 47.8989 58.0629C47.2493 57.1061 47.0235 54.3441 46.9662 51.6909C51.8751 51.4369 55.7812 47.1933 55.7812 42.6252ZM46.5 50.5603C42.3682 50.5603 38.9695 47.2777 38.5291 43.5327C38.496 43.261 38.479 42.9875 38.478 42.7138C38.478 38.5584 40.5592 35.9875 40.5592 35.9875H52.4404C52.4404 35.9875 54.4848 38.5141 54.519 42.6117C54.5194 42.6455 54.522 42.6788 54.522 42.7138C54.522 46.7862 50.9305 50.5603 46.5 50.5603Z" fill="#F8D32A"/>
                        <defs>
                            <filter id="filter0_d_40_8" x="0" y="0" width="102" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_40_8"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_40_8"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_40_8" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <div class="card-body text-start ">
                        <svg width="8" height="50" viewBox="0 0 8 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 55%; left: 1%; transform: translate(-50%, -50%);">
                            <path d="M0 0H5C6.65685 0 8 1.34315 8 3V47C8 48.6569 6.65685 50 5 50H0V0Z" fill="#F8D32A"/>
                        </svg>
                        <h5 class="card-title font-sulphur-point">Lorem Ipsum del marre</h5>
                        <small class="card-text font-Anaheim">Lorem ipsum dolor sit amet</small>
                    </div>
                    <div class="card-footer bg-white font-Anaheim ">
                        <p class="card-text bg-white text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#" class="btn btn-warning " id="a-contact-card">Nous contacter</a>
                    </div>
                </div>
            </div>
            <div class="col mx-auto  py-5">
                <div class="card" style="width: 18rem; ">
                    <img src="./assets/img/image_1.png" class="card-img-top rounded mx-auto mt-1" alt="image pic-nic" style="width: 17rem;" >
                    <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 8%; left: 88%; transform: translate(-50%, -50%);">
                        <g filter="url(#filter0_d_40_8)">
                            <circle cx="47" cy="47" r="21" fill="#FAFAFA"/>
                            <circle cx="47" cy="47" r="20.5" stroke="#F8D32A"/>
                        </g>
                        <path d="M39.3538 43.334C39.7491 46.693 42.7971 49.6372 46.5024 49.6372C50.4765 49.6372 53.6975 46.2521 53.6975 42.5991C53.6975 42.5679 53.6954 42.5375 53.695 42.5076C49.5952 41.9511 44.372 44.93 39.3538 43.334Z" fill="#F8D32A"/>
                        <path d="M55.7812 42.6252C55.7812 37.8146 53.3728 34.8438 53.3728 34.8438H39.6268C39.6268 34.8438 37.2188 37.8188 37.2188 42.6252C37.2188 47.1933 41.1236 51.4365 46.0338 51.6909C45.9765 54.3437 45.7508 57.1061 45.1011 58.0629C44.186 59.4112 40.9789 58.7185 40.9789 60.1563H52.0223C52.0223 58.7181 48.814 59.4112 47.8989 58.0629C47.2493 57.1061 47.0235 54.3441 46.9662 51.6909C51.8751 51.4369 55.7812 47.1933 55.7812 42.6252ZM46.5 50.5603C42.3682 50.5603 38.9695 47.2777 38.5291 43.5327C38.496 43.261 38.479 42.9875 38.478 42.7138C38.478 38.5584 40.5592 35.9875 40.5592 35.9875H52.4404C52.4404 35.9875 54.4848 38.5141 54.519 42.6117C54.5194 42.6455 54.522 42.6788 54.522 42.7138C54.522 46.7862 50.9305 50.5603 46.5 50.5603Z" fill="#F8D32A"/>
                        <defs>
                            <filter id="filter0_d_40_8" x="0" y="0" width="102" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_40_8"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_40_8"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_40_8" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <div class="card-body text-start ">
                        <svg width="8" height="50" viewBox="0 0 8 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 55%; left: 1%; transform: translate(-50%, -50%);">
                            <path d="M0 0H5C6.65685 0 8 1.34315 8 3V47C8 48.6569 6.65685 50 5 50H0V0Z" fill="#F8D32A"/>
                        </svg>
                        <h5 class="card-title font-sulphur-point">Lorem Ipsum del marre</h5>
                        <small class="card-text font-Anaheim">Lorem ipsum dolor sit amet</small>
                    </div>
                    <div class="card-footer bg-white font-Anaheim ">
                        <p class="card-text bg-white text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#" class="btn btn-warning " id="a-contact-card">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="savoir-plus-activite-zone ">
            <a href="#" class="btn btn-light font-inter shadow-lg px-5 text-center " id="a-contact-card">En Savoir plus</a>
        </div>
    </section>

</main>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>