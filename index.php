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

    <section class="activite-zone py-2 text-center">
        <div class="nos-activite-activite-zone ">
            <p class="">Nos activités</p>
        </div>
        <h1 class="font-sulphur-point">Lorem Ipsum del marre</h1>
        <div>
            <p class="font-Anaheim">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
        </div>

        <div class="row row-cols-md-6">
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
        </div>

        <div class="savoir-plus-activite-zone">
            <a href="#" class="btn btn-light font-inter" id="a-contact-card">En Savoir plus</a>
        </div>
        

    </section>

</main>

<?php
require_once __DIR__ . '/inc/footer.php';
    
?>