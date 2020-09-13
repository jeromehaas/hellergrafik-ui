<!doctype html>
<html lang="de">
<head>
    <?php include '../partials/head.php' ?>
    <title>Kontakt</title>
    <meta name="description" content="heller grafik | Isabel Heller | Zähringerstrasse 13 | 6003 Luzern | isabel@hellergrafik.ch | 077 405 23 49">
</head>
<body>


<!-- NAVIGATION DESKTOP -->
<?php include '../partials/navigation_desktop.php' ?>
<!-- NAVIGATION DESKTOP -->

<!-- NAVIGATION MOBILE -->
<?php include '../partials/navigation_mobile.php' ?>
<!-- NAVIGATION MOBILE -->

<div id="page-wrapper">

    <main class="section-contact">
        <address class="contact__address">
            <div class="contact__address__container">
                <h2 class="contact__address__text">heller grafik</h2>
                <p class="contact__address__text">Isabel Heller</p>
                <p class="contact__address__text">Zähringerstrasse 13</p>
                <p class="contact__address__text">6003 Luzern</p>
            </div>
            <div class="contact__address__container">
                <a class="contact__address__link default-link" href="mailto:isabel@hellergrafik.ch">isabel@hellergrafik.ch</a><br>
                <a class="contact__address__link default-link" href="tel:0774052349">077 405 23 49</a>
            </div>

        </address>
        <img    class="contact__image"
                srcset="    ../../../media/img/contact/01_500_hellergrafik_visitenkarten_02.jpg  500w,
                            ../../../media/img/contact/01_1000_hellergrafik_visitenkarten_02.jpg  1000w,
                            ../../../media/img/contact/01_1500_hellergrafik_visitenkarten_02.jpg  1500w,
                            ../../../media/img/contact/01_2000_hellergrafik_visitenkarten_02.jpg  2000w,
                            ../../../media/img/contact/01_2500_hellergrafik_visitenkarten_02.jpg  2500w"
                sizes="100%"
                alt="heller grafik Visitenkarten">
        <img    class="contact__image"
                srcset="    ../../../media/img/contact/02_500_Isabel_Heller_Grafikerin_14.jpg  500w,
                            ../../../media/img/contact/02_1000_Isabel_Heller_Grafikerin_14.jpg  1000w,
                            ../../../media/img/contact/02_1500_Isabel_Heller_Grafikerin_14.jpg  1500w,
                            ../../../media/img/contact/02_2000_Isabel_Heller_Grafikerin_14.jpg  2000w,
                            ../../../media/img/contact/02_2500_Isabel_Heller_Grafikerin_14.jpg  2500w"
                sizes="100%"
                alt="Isabel Heller">
    </main>

</div> <!-- END OF PAGE-WRAPPER -->

<!-- FOOTER -->
<?php include '../partials/footer_mobile.php' ?>
<?php include '../partials/footer_desktop.php' ?>
<!-- FOOTER -->

<script src="http://localhost:8888/hellergrafik/js/jquery.js"></script>
<script src="http://localhost:8888/hellergrafik/js/ux.js"></script>

</body>
</html>