<?php 

require_once "../classes/Voiture.class.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ($_POST["marque"] != null) {
    // On INSTANCIE notre nouveau produit, en récupérant ce qu'on as mis dans le formulaire a l'aide de POST
    $produit = new VOITURE(
      $_POST["prix"],
      $_POST["date"],
      $_POST["modele"],
      $_POST["marque"],
      $_POST["puissance"],
      $_POST["année"],
      $_POST["description"],
      $_POST["motorisation"],
      $_POST["image"]
    ); 
var_dump($produit);

}
}

?>

<!DOCTYPE html>
<html>

<head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="../index.css">

</head>

<body>
  <?php include __DIR__ . './../components/header.php'; ?>
  <h1>Créer un nouveau produit</h1>
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <form action="" method="POST">
          <input type="text" name="prix" placeholder="prix" required />
          <input type="text" name="date" placeholder="date" required />
          <input type="text" name="modele" placeholder="modele" required />
          <input type="text" name="marque" placeholder="marque" required />
          <input type="text" name="puissance" placeholder="puissance" required />
          <input type="text" name="annee" placeholder="annee" required />
          <input type="text" name="description" placeholder="description" required />
          <input type="text" name="motorisation" placeholder="motorisation" required />
          <textarea name="description"></textarea>
          <button type="submit">Valider</button>
        </form>
        <!--Fin boucle de produit -->
      </div>
    </div>
  </section>
  <?php include __DIR__ . './../components/footer.php'; ?>
</body>

</html>
