<?php
  session_start();

  require('includes/database.inc.php');
  require('includes/login.inc.php');


// Requete pour aller chercher les infos dans la table hotels
  $hotels = mysqli_query($db,'SELECT * FROM hotels ORDER BY Nom DESC');
  $texte  = mysqli_query($db,'SELECT * FROM textes WHERE id = 1;');

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Latoy est une société spécialisé dans la gestion hôtelière, pour s'occuper à votre place des opérations de la pls courante à la plus fastidieuse">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - Latoy Hotel Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_navbar.css">
    <link rel="stylesheet" href="style/style_index.css">
    <link rel="stylesheet" href="style/style_services.css">
    <link rel="stylesheet" href="style/style_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  </head>

  <body>

      <?php include('includes/navbar.inc.php'); ?>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="hidden" id="consent-popup">
      <p style="margin: 0;">Ce site utilise des cookies pour offrir une meilleure expérience utilisateur. En poursuivant votre navigation, <a id="accept" href="#">vous acceptez</a> notre politique de confidentialité</p>
    </div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="banner" id="banner_index">
      <?php while($t = mysqli_fetch_assoc($texte)) { ?>
        <p><?=$t['texte']?></p>
      <?php } ?>
    </div>


    <h1>NOS <b>HOTELS</b></h1>

    <main class="container-fluid justify-content-start" id="affichage_hotels" style="color:black;">
      <div class="row justify-content-start col-sm-12">

        <?php while($h = mysqli_fetch_assoc($hotels)) { ?>
          <div class="container-fluid justify-content-start col-sm-12 col-lg-6 p-2">
            <div class="row justify-content-start item_box">
              <div class="col-lg-6 col-xs-12 hotel_pic">
              <a href="<?=$h['Website'] ?>" target="_blank"><img src="images/photos_hotel/<?=$h['id'] ?>.png" alt="photo de l'hôtel de <?=$h['Ville'] ?>" class="img-fluid"></a>
              </div>
              <div class="col-lg-6 col-xs-12 description">
                  <p class="nom_hotel_titre my-2"><strong><?=$h['Nom'] ?></strong></p>
                  <p class="adresse my-0"><?=$h['Adresse'] ?></p>
                  <p class="adresse my-0"><?=$h['Ville'] ?></p>
                  <ul class="mt-2 align-items-end">
                    <li><?=$h['Chambres'] ?> chambres</li>
                    <li><?=$h['Carac2'] ?></li>
                    <li><?=$h['Carac3'] ?></li>
                  </ul>
                </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </main>


    <h1>NOS <b>SERVICES</b></h1>

    <p id="text_services_index">Nous vous proposons 3 différents services adaptés à vos besoins. Le <a href="rmpackage.php">RM Package</a>, offre la plus légère de notre catalogue,<a href="managementconsulting.php">Management Consulting</a> pour des besoins intermédiairesn et enfin <a href="fullmanagement.php">Full Management</a> qui vous permettra de prendre en charge le fonctionnement de votre propriété.
    </p>

    <div class="container col-12 boutons_bas">
      <div class="row justify-content-around boutons">
        <div class="autre_pack col-xs-12 col-lg-3 text-center row mx-3">
          <a href="rmpackage.php" class="d-flex align-items-center col-12">RM Package</a>
          <div class="progress col-12 mb-2" style="width: 33%; height: 20px;">
            <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="autre_pack col-xs-12 col-lg-3 text-center row mx-3">
          <a href="rmpackage.php" class="d-flex align-items-center col-12">Management consulting</a>
          <div class="progress col-12 mb-2" style="width: 66%; height: 20px;">
            <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="autre_pack col-xs-12 col-lg-3 text-center row mx-3">
          <a href="managementconsulting.php" class="d-flex align-items-center col-12">Full management</a>
          <div class="progress col-12 mb-2" style="width: 100%; height: 20px;">
            <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <?php include('includes/footer.inc.php'); ?>

  <script src="cookie.js"></script>
  </body>
</html>
