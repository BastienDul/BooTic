  <?php include './inc/img/header.inc.php'; ?>

  <main class="">

  <?php

$idProduit = $_GET['id'];

try {
  $username = "root";
  $password = '';
  $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
  $maBase = new PDO($dsn, $username, $password);
  $maBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  //Ajout de WHERE id_produit = '.$idProduit pour filtrer les resultat par id_produit, comme nous récupérons l'id_produit dans l'url
  $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie) WHERE id_produit = '.$idProduit);


  $res = $req->fetchAll();
  foreach ($res as $key => $value) {
    echo'<div class="container ">
    <div class="row panier-centrage">
      <div class="col-12 ">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col" colspan="4">Panier</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Produit</th>
              <th>Quantité</th>
              <th>Prix</th>
              <th>Action</th>
            </tr>
            <tr>
              <td scope="row">'.$value[3].'</td>
              <td></td>
              <td>'.$value[9].'€</td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">Total</th>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row" colspan="2" class="text-center"><button class="btn btn-secondary" type="submit">Valider</button></th>
              <td colspan="2" class="text-center"><button class="btn btn-secondary" type="reset">Vider</button></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  </div>';
  }
}catch (PDOException $e) {
  echo 'Erreur : ' . $e->getMessage();
}

?>
</main>

<?php include './inc/img/footer.inc.php'; ?>