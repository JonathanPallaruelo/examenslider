<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PUBLIC/Less/normalize.css">
    <link rel="stylesheet" type="text/css" href="PUBLIC/Less/CssLess/css.css">
    <title>Document</title>
</head>

<body>

    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <img src="./PUBLIC/Images/logo2 (1).png" alt="Logo">
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>


            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">



                    <li class="dropdown__item">
                        <div class="nav__link">
                            Productos <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    Rejillas<i class="ri-pie-chart-line"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    Caminos <i class="ri-road-line"></i>
                                </a>
                            </li>


                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <i class="ri-bar-chart-line"></i>Suelos <i class="ri-add-line dropdown__add"></i>
                                </div>

                                <ul class="dropdown__submenu">
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-file-list-line"></i>Aparcamientos
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-cash-line"></i> Agua
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-refund-2-line"></i> Grava
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="SobreEcodeckLess.html" class="nav__link">Sobre Ecodeck</a></li>
                    <li><a href="#" class="nav__link">Distribuidor Oficial</a></li>


                    <li class="dropdown__item">


                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-user-line"></i> Profiles
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-lock-line"></i> Accounts
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Messages
                                </a>
                            </li>
                        </ul>

                    </li>
                    <div class="bottonNavDiv">

                        <button class="contacButton">
                            <a href="contactPage.html">Contacta</a>
                        </button>

                    </div>

                </ul>



            </div>
        </nav>
        
    </header>
    <div id="overlay"></div>

    <footer id="Footer">
        <div class="footer-container">
            <div class="footer-container-card">
                <div class="footer-container-card-icon">
                    <img src="./PUBLIC/Images/imagefooter2.jpg" alt="Icono 1">
                </div>
                <div class="footer-container-card-text">
                    <h3><i class="fas fa-industry"></i> Industry Respected</h3>
                    <p>We've been innovating in this industry for over 10 years, building upon solid recognition in
                        the industry.</p>

                </div>
            </div>
            <div class="footer-container-card">
                <div class="footer-container-card-icon">
                    <img src="./PUBLIC/Images/imagefooter3.jpg" alt="Icono 2">
                </div>
                <div class="footer-container-card-text">
                    <h3><i class="fas fa-recycle"></i> Sustainable Supply Chains</h3>
                    <p>We keep our manufacturing & supply chains green & local, helping to reduce our carbon
                        footprint.</p>
                </div>
            </div>
            <div class="footer-container-card">
                <div class="footer-container-card-icon">
                    <img src="./PUBLIC/Images/imagefooter4.webp" alt="Icono 3">
                </div>
                <div class="footer-container-card-text">
                    <h3><i class="fas fa-truck"></i> National & International Logistics</h3>
                    <p>We partner with local haulage and logistics partners.
                    </p>
                </div>
            </div>
            <div class="footer-container-card">
                <div class="footer-container-card-icon">
                    <img src="./PUBLIC/Images/imagefooter5.jpg" alt="Icono 4">
                </div>
                <div class="footer-container-card-text">
                    <h3><i class="fas fa-certificate"></i> Quality Comes First</h3>
                    <p>Your project needs to stand the test of time. That's why we don't scrimp on materials to give
                        ourselves extra margin</p>
                </div>
            </div>
        </div>



        <div class="footer-title">
            <h2>Locking in Waste Plastic for Good.</h2>
            <p>IBRAN is a sustainable UK manufacturer of grass and gravel parking grids
            </p>
        </div>



        <section class="footer-last-section">


            <div class=" footer-last-section-logo-links">
                <ul>
                    <li><a href="#">LINKS</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contactanos</a></li>
                    <li><a href="#">Sobre-Ecodeck</a></li>




                </ul>
            </div>


        </section>

        <div class="Copyright">
            <p>Copyright © 2024 Ecodeck. Todos los derechos reservados.</p>

        </div>


    </footer>


    <script>
        const showMenu = (toggleId, navId) => {
            const toggle = document.getElementById(toggleId);
            const nav = document.getElementById(navId);
            const overlay = document.getElementById('overlay');

            toggle.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    nav.classList.toggle('show-menu');
                    toggle.classList.toggle('show-icon');
                    overlay.style.display = nav.classList.contains('show-menu') ? 'block' : 'none';
                }
            });

            //function para controloar el overlay
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    nav.classList.remove('show-menu');
                    toggle.classList.remove('show-icon');
                    overlay.style.display = 'none';
                }
            });
        };

        showMenu('nav-toggle', 'nav-menu');
    </script>

</body>

</body>

</html>