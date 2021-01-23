<nav class="navbar sticky-top navbar-expand-lg " id="barre_navigation" >
  <a class="navbar-brand" href="index.php"><img src="images/logo_blanc_origine.png" alt="logo_latoy"></a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav h-100">
      <li class="nav-item active px-3">
        <a class="nav-link text-right" href="contact.php">Nous contacter</a>
      </li>
      <li class="nav-item active px-3">
        <a class="nav-link text-right" href="news.php?page=1">Actualités</a>
      </li>
      <li class="nav-item active px-3 dropdown" id="drop_services">
        <a class="nav-link text-right dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nos Services
        </a>
        <div class="dropdown-menu " style="background-color: #1a1a1a !important;" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item d-flex justify-content-end align-items-center" href="rmpackage.php">RM Package</a>
          <a class="dropdown-item d-flex justify-content-end align-items-center" href="managementconsulting.php">Management Consulting</a>
          <a class="dropdown-item d-flex justify-content-end align-items-center" href="fullmanagement.php">Full Management</a>
        </div>
      </li>
  <!-- on fait apparaitre le lien de déconnexion et de la page admin uniquement si on est déjà connecté -->
      <?php if(isset($_SESSION['userName'])) {  ?>
        <li class="nav-item active px-3 dropdown" id="drop_admin">
          <a class="nav-link text-right dropdown-toggle" href="Admin.php" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administration
          </a>
          <!-- chaque bouton aura pour cible sa section respective dans le panneau d'adminstration pour une navigation plus confortable -->
          <div class="dropdown-menu  text-right align-items-center" style="background-color: #1a1a1a !important;" aria-labelledby="navbarDropdownMenu">
            <a class="dropdown-item d-flex justify-content-end align-items-center" href="Admin.php">Hotels</a>
            <a class="dropdown-item d-flex justify-content-end align-items-center" href="Admin.php#rmpackage">RM Package</a>
            <a class="dropdown-item d-flex justify-content-end align-items-center" href="Admin.php#managementconsulting">Management Consulting</a>
            <a class="dropdown-item d-flex justify-content-end align-items-center" href="Admin.php#fullmanagement">Full Management</a>
            <a class="dropdown-item d-flex justify-content-end align-items-center" href="Admin.php#News">Actualités</a>
            <a class="dropdown-item d-flex justify-content-end align-items-center" href="Admin.php#Textes">Textes d'en-têtes</a>
          </div>
        </li>
        <li class="nav-item active px-3">
          <a class="nav-link text-right" href="logout.php">Déconnexion</a>
        </li>
     <?php } ?>
    </ul>
  </div>
</nav>
