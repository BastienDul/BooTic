<?php include '../inc/img/header.inc.php'; ?>
<main class="bg-secondary">

  <?php
  try {

    include '../inc/img/connexionDb.inc.php';


    $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)');

      echo('<div class="row bg-light py-5">
      <div class="col-12 text-center">
        <button class="btn btn-success mx-auto"><a class="text-light text-decoration-none" href="gestion_ajout_produit.php?action=C">Ajouter un Produit</a></button>
      </div>
      </div>');

    $res = $req->fetchAll();
    foreach ($res as $key => $value) {

      echo '<table class="table table-bordered text-center">
      <h5 class = "text-center py-3">Produit : ' . $value[3] . '</h5>
      <tbody>
        <tr>
          <th scope="row">id_produit</th>
          <td>' . $value[0] . '</td>
        </tr>
      

        <tr>
          <th scope="row">reference</th>
          <td>' . $value[1] . '</td>
        </tr>
        <tr>
          <th scope="row">categorie</th>
          <td>' . $value[2] . '</td>

        </tr>
        <tr>
          <th scope="row">titre</th>
          <td>' . $value[3] . '</td>
        </tr>
        <tr>
          <th scope="row">Description</th>
          <td>' . $value[4] . '</td>
        </tr>
        <tr>
          <th scope="row">couleur</th>
          <td>' . $value[5] . '</td>
        </tr>
        <tr>
          <th scope="row">taille</th>
          <td>' . $value[6] . '</td>
        </tr>
        <tr>
          <th scope="row">public</th>
          <td>' . $value[6] . '</td>
        </tr>
        <tr>
          <th scope="row">photo</th>
          <td><img src="../inc/img/BOOTIC_IMG/' . $value[12] . '/' . $value[8] . '.webp" width="72rem" alt="Photo ' . $value[3] . '"></td>
        </tr>
        <tr>
          <th scope="row">prix</th>
          <td>' . $value[9] . '</td>
        </tr>
        <tr>
          <th scope="row">stock</th>
          <td>' . $value[10] . '</td>
        </tr>
        <tr>
          <th scope="row">Modification</th>
          <td><a href="gestion_ajout_produit.php?action=U&id='.$value[0].'"><img src="../inc/img/BOOTIC_IMG/list-2389219_640.png" width="72rem" alt="photo bloc note"></a></td>
        </tr>
        <tr>
          <th scope="row">Suppression</th>
          <td><a href=""><img src="../inc/img/BOOTIC_IMG/trash-310219_640.png" width="72rem" alt="photo Poubelle"></a></td>
        </tr>
      </tbody>
    </table>';

    }
  } catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
  }

  ?>
</main>

<?php include '../inc/img/footer.inc.php'; ?>