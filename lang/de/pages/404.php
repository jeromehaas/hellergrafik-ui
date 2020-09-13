<!doctype html>
<html lang="de">
<head>
    <?php include '../partials/head.php' ?>
    <title>Fehler</title>
    <meta name="description" content="Diese Seite konnte nicht gefunden werden.">
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
        <h3 class="pagenotfound-title">Fehler 404</h3>
        <h3 class="pagenotfound-text">Leider existiert diese Seite nicht.</h3>
        <a class="pagenotfound__link link-small" href="../../../index.php" tabindex="1">
            <?php include '../../../media/icons/arrow_small.svg' ?>
            <span class="link-small__text">Zurück zur Website</span>
        </a>
    </main>

</div> <!-- END OF PAGE-WRAPPER -->

<!-- FOOTER -->
<?php include '../partials/footer_mobile.php' ?>
<?php include '../partials/footer_desktop.php' ?>
<?php include '../partials/privacy_notification.php' ?>
<!-- FOOTER -->



</body>
</html>