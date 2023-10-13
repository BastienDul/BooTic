<?php include '../inc/img/header.inc.php'; ?>
<main class="bg-secondary">

  <?php
  try {

    include '../inc/img/connexionDb.inc.php';


    $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)');

      echo('<div class="row bg-secondary py-5">
      <div class="col-12 text-center">
        <button class="btn btn-success mx-auto"><a class="text-light text-decoration-none" href="gestion_ajout_produit.php?action=C">Ajouter un Produit</a></button>
      </div>
      </div>');

    $res = $req->fetchAll();
    foreach ($res as $key => $value) {

      echo '<table class="table table-bordered text-center">
      <h5 class = "text-center py-3 bg-dark text-light">Produit : ' . $value[3] . '</h5>
      <tbody>
        <tr>
          <th class="bg-secondary" scope="row">id_produit</th>
          <td class="bg-secondary">' . $value[0] . '</td>
        </tr>
      

        <tr>
          <th class="bg-secondary" scope="row">reference</th>
          <td class="bg-secondary">' . $value[1] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">categorie</th>
          <td class="bg-secondary">' . $value[2] . '</td>

        </tr>
        <tr>
          <th class="bg-secondary" scope="row">titre</th>
          <td class="bg-secondary">' . $value[3] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">Description</th>
          <td class="bg-secondary">' . $value[4] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">couleur</th>
          <td class="bg-secondary">' . $value[5] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">taille</th>
          <td class="bg-secondary">' . $value[6] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">public</th>
          <td class="bg-secondary">' . $value[6] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">photo</th>
          <td class="bg-secondary"><img src="../inc/img/BOOTIC_IMG/'.$value[8].'" width="72rem" alt="Photo ' . $value[3] . '"></td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">prix</th>
          <td class="bg-secondary">' . $value[9] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">stock</th>
          <td class="bg-secondary">' . $value[10] . '</td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">Modification</th>
          <td class="bg-secondary"><a href="gestion_ajout_produit.php?action=U&id='.$value[0].'"><img src="../inc/img/BOOTIC_IMG/list-2389219_640.png" width="72rem" alt="photo bloc note"></a></td>
        </tr>
        <tr>
          <th class="bg-secondary" scope="row">Suppression</th>
          <td class="bg-secondary"><a href="data.php?action=D&id='.$value[0].'" class="bouton_delet" ><img src="../inc/img/BOOTIC_IMG/trash-310219_640.png" width="72rem" alt="photo Poubelle"></a></td>
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