<!doctype html>
<html lang="de">
<head>
    <?php include '../partials/head.php' ?>
</head>
<body>


    <!-- NAVIGATION DESKTOP -->
    <?php include '../partials/navigation_desktop.php' ?>
    <!-- NAVIGATION DESKTOP -->

    <!-- NAVIGATION MOBILE -->
    <?php include '../partials/navigation_mobile.php' ?>
    <!-- NAVIGATION MOBILE -->

    <div id="page-wrapper">

        <main class="section-info">
            <div class="intro">
                <h2 class="intro__text">
                    heller grafik fokussiert sich auf wertebasiertes Branding. Die visuelle Sprache einer Marke soll unternehmerische Ziele und Werte widerspiegeln und bei deren Publikum Anklang finden.<br>
                    Ich höre zu, möchte Zusammenhänge und Zielgruppen verstehen.
                </h2>
                <a class="section-hero__content__link link-small" href="./contact.php" tabindex="1">
                    <?php include '../../../media/icons/arrow_small.svg' ?>
                    <span class="link-small__text">Kontakt aufnehmen</span>
                </a>
                <img    class="intro__image"
                        srcset="    ../../../media/img/info/01_500_hellergrafik_04.jpg  500w,
                                    ../../../media/img/info/01_1000_hellergrafik_04.jpg  1000w,
                                    ../../../media/img/info/01_1500_hellergrafik_04.jpg  1500w,
                                    ../../../media/img/info/01_2000_hellergrafik_04.jpg  2000w,
                                    ../../../media/img/info/01_2500_hellergrafik_04.jpg  2500w"
                        sizes="100%"
                        alt="light my fire">
            </div>
            <div class="cards">
                <article class="card ">
                    <p class="card__title">Meine Leistungen</p>
                    <ul class="card__list">
                        <li class="card__list-item"><h3>Branding</h3></li>
                        <li class="card__list-item"><h3>Brand Strategy</h3></li>
                        <li class="card__list-item"><h3>Brand Identity</h3></li>
                        <li class="card__list-item"><h3>Print Design</h3></li>
                        <li class="card__list-item"><h3>Editorial Design</h3></li>
                        <li class="card__list-item"><h3>Digital Design</h3></li>
                        <li class="card__list-item"><h3>Packaging Design</h3></li>
                        <li class="card__list-item"><h3>Visuelle Konzeption</h3></li>
                        <li class="card__list-item"><h3>Signaletik</h3></li>
                    </ul>
                </article>
                <article class="card ">
                    <p class="card__title">Meine Werte</p>
                    <ul class="card__list">
                        <li class="card__list-item"><h3>Ganzheitlich</h3></li>
                        <li class="card__list-item"><h3>Effektiv</h3></li>
                        <li class="card__list-item"><h3>Empathisch</h3></li>
                        <li class="card__list-item"><h3>Nachhaltig</h3></li>
                        <li class="card__list-item"><h3>Passioniert</h3></li>
                    </ul>
                </article>
            </div>
            <div class="about">
                <img    class="about__image"
                        srcset="    ../../../media/img/info/02_500_Isabel_Heller_Grafik.jpg  500w,
                                    ../../../media/img/info/02_1000_Isabel_Heller_Grafik.jpg  1000w,
                                    ../../../media/img/info/02_1500_Isabel_Heller_Grafik.jpg  1500w,
                                    ../../../media/img/info/02_2000_Isabel_Heller_Grafik.jpg  2000w,
                                    ../../../media/img/info/02_2500_Isabel_Heller_Grafik.jpg  2500w"
                        sizes="100%"
                        alt="Isabel Heller">
                <h2 class="about__title">
                    Isabel Heller <br>
                    Visuelle Gestalterin
                </h2>
                <p class="about__text">
                    Ich bin eine neugierige Weltenbummlerin mit Affinität zu Design, gutem Essen und spannenden Büchern. In meinem Berufsalltag sowie in meiner Freizeit schaue ich über den Tellerrand hinaus und mag es, mich mit Neuem auseinanderzusetzen.
                </p>
                <div class="about__show-more-box">
                    <div class="show-more-box__item">
                        <p class="show-more-box__title">Aus- und Weiterbildungen</p>
                        <table class="show-more-box__table">
                            <tr class="show-more-box__row">
                                <td class="show-more-box__cell">2018 – 2019</td>
                                <td class="show-more-box__cell">Lehrgang Digital Experience Design, SfG Aargau</td>
                            </tr>
                            <tr class="show-more-box__row">
                                <td class="show-more-box__cell">2014 – 2016</td>
                                <td class="show-more-box__cell">Tagesklasse «Sehen und Gestalten», Gestaltungsschule Farbmühle, Luzern</td>
                            </tr>
                            <tr class="show-more-box__row">
                                <td class="show-more-box__cell">2008 – 2012</td>
                                <td class="show-more-box__cell">Polygrafin EFZ</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- <a class="section-hero__content__link link-small" href="" tabindex="1">
                    <?php include '../../../media/icons/arrow_small.svg' ?>
                    <span class="link-small__text">Mehr efahren</span>
                </a> -->
                <img    class="about__image"
                        srcset="    ../../../media/img/info/03_500_hellergrafik_02.jpg  500w,
                                    ../../../media/img/info/03_1000_hellergrafik_02.jpg  1000w,
                                    ../../../media/img/info/03_1500_hellergrafik_02.jpg  1500w,
                                    ../../../media/img/info/03_2000_hellergrafik_02.jpg  2000w,
                                    ../../../media/img/info/03_2500_hellergrafik_02.jpg  2500w"
                        sizes="100%"
                        alt="look on the bright side">
        </main>

    </div> <!-- END OF PAGE-WRAPPER -->

<!-- FOOTER -->
<?php include '../partials/footer_mobile.php' ?>
<?php include '../partials/footer_desktop.php' ?>
<!-- FOOTER -->

<script src="http://localhost:8888/grafik_heller/js/jquery.js"></script>
<script src="http://localhost:8888/grafik_heller/js/ux.js"></script>

</body>
</html>