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

    <main class="section-pagenotfound">
        <h3 class="pagenotfound-title">404</h3>
        <p class="pagenotfound-text">Diese Seite wurde nicht gefunden.</p>
        <a class="pagenotfound__link link-small" href="../../../index.php" tabindex="1">
            <?php include '../../../media/icons/arrow_small.svg' ?>
            <span class="link-small__text">zurück zur Webseite</span>
        </a>
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