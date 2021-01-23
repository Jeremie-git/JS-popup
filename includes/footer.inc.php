<footer>
  <div class="" id="contact_footer">
    <a href="mentions_legales.php">Mentions légales</a>
  </div>
<!-- on affiche le bouton de connexion seulement si on n'est pas encore reconnu comme admin -->
<?php
if(!isset($_SESSION['userName'])) { ?>
  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" id="btnlogin">
    Se connecter
  </button>
  <?php } ?>
<!-- carte de connexion au back-end -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog col-11 row justify-content-center" role="document">
      <div class="modal-content">
        <!-- en-tête de la carte -->
        <div class="modal-header">
          <img src="images/logo_blanc_origine.png" alt="logo_latoy" class="rounded img-fluid">
        </div>
        <!-- corps de la carte, avec le formulaire -->
        <div class="modal-body">
          <form action="#" method="POST">
              <input type="text" id="login" class="form-control form-control-lg mb-2" name="username" placeholder="identifiant">
              <input type="password" id="password" class="form-control form-control-lg mb-2" name="password" placeholder="mot de passe">
              <button type="submit" class="btn btn-lg btn-primary btn-block" name="connect">Se connecter</button>
                <?php if(isset($failpwd)){
                  echo "<div class='alert alert-danger' role='alert'>". $failpwd . "</div>" ;
                } elseif (isset($vide)) {
                  echo "<div class='alert alert-danger' role='alert'>". $vide. "</div>" ;
                }
                ?>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="" id="res_soc_footer">
    <a href="https://fb.me/Latoy.fr"> <img src="images/grey_facebook.svg" alt="facebook"> </a>
    <a href="https://www.linkedin.com"> <img src="images/grey_linkedin.svg" alt="linkedin"> </a>
    <a href="https://www.instagram.com/latoy.fr/"> <img src="images/grey_insta.svg" alt="instagram"> </a>
  </div>
</footer>

<!-- Script empêchant la soumission du formulaire lors du refresh de la page -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168109459-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config','UA-168109459-1');
</script> -->
