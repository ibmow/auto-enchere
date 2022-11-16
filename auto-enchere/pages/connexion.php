
<?php

function login(string $email, string $password)
{
  //permettre de pouvoir utiliser les session sur votre site
  session_start();
  if (!empty($_SESSION['users'])) {
    foreach ($_SESSION['users'] as $user) {
      if ($user['email'] == $email && $user['password'] == $password) {
        return true;
      }
    }
  }
  return false;
}

?>


<!DOCTYPE html>
<html>

<head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="/index.css">

</head>

<body>
  <?php include __DIR__ . './../components/header.php'; ?>
  <section>
    <h2>Connexion</h2>
    <form  method="POST">
      <input type="email" name="email" placeholder="email" required />
      <input type="password" name="password" placeholder="mot de passe" required />
      <button>Valider</button>
    </form>
  </section>
  <?php include __DIR__ . './../components/footer.php'; ?>
</body>

</html>