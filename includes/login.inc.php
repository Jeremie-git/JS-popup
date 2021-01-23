<?php
// Script pour se connecter au back-end admin
  if(isset($_POST['connect'])) {
    //real_escape_string() évite les injections de code
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!empty($_POST['username']) AND !empty($_POST['password'])) {
        $sql = "SELECT * FROM users WHERE username = ?;";
        //On initialise une commande MySQL
        $statement = mysqli_stmt_init($db);
        if(mysqli_stmt_prepare($statement, $sql)) {
          // On passe les infos entrées par l'utilisateur dans la BDD
          mysqli_stmt_bind_param($statement, "s", $username);
          mysqli_stmt_execute($statement);
          // On veut "attraper" les résultats obtenus par $sql
          $resultat = mysqli_stmt_get_result($statement);
          // Si $resultat réucpère des infos, alors on les stock dans un tableau utilisable en php
          if($row = mysqli_fetch_assoc($resultat)) {
            // On compare le MdP entré par l'utilisateur avec celui de la BDD
            if($password == $row['userpwd']) {
              // Si $passwordCheck est vrai (donc les 2 infos correspondent), on démarre une session_start
              session_start();
              $_SESSION['userId'] = $row['idUser'];
              $_SESSION['userName'] = $row['username'];
              header("Location: Admin.php?success=login");
            } else if ($passwordCheck ==  false) {
              $failpwd = "Login ou Mot de Passe invalide";
              header("Location: index.php?error=loginoumdpincorret");
            } else {
              header("Location: index.php?error=checkpasbool");
            }
          } else {
            header("Location: index.php?error=arrayEmpty");
          }
        } else {
          header("Location: index.php?error=badInit");
        }
      } else {
      $vide = "Username ou Mot de Passe non renseigné";
    }
  }
?>
