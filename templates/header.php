<?php

/**
 * Header template
 * 
 * @package luxsite
 */

?>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container py-3">
            <a class="navbar-brand ms-3 ms-lg-0" href="#">
                <img src="<?php echo IMG_DIR . 'lux_white.svg' ?>" alt="LUX DIGITAL">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsed" aria-controls="navbarCollapsed" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi-list text-white fs-1"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapsed">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0 text-center text-lg-left">
                    <li class="nav-item">
                        <a class="nav-link" href="#quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
                <!-- <div class="contact d-flex mt-3 mt-lg-0">
                    <a class="m-auto d-flex flex-column flex-lg-row" target="_blank" noopener noreferrer nofollow
                    href="https://api.whatsapp.com/send?phone=351921759523">
                        <span class="icon bi-whatsapp m-auto"></span>
                        <span class="text mt-2 mx-auto ms-lg-2 my-lg-auto text-center text-lg-left">
                            +351 921 759 523
                            <small class="">fale com um estrategista!</small>
                        </span>
                    </a>
                </div> -->
                <div class="contact d-flex mt-3 mt-lg-0">
                    <a class="m-auto d-flex flex-lg-row" target="_blank" noopener noreferrer nofollow
                    href="https://api.whatsapp.com/send?phone=351921759523">
                        <span class="icon bi-whatsapp m-auto"></span>
                        <span class="text ms-2 my-auto text-center text-lg-left">
                            +351 921 759 523
                            <small class="d-none d-lg-block">fale com um estrategista!</small>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>