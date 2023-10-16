<?php

include './inc/img/header.inc.php';

if (!isset($_SESSION['panier'])) {

    /* Initialisation du panier */
  $_SESSION['panier'] = array();
  /* Subdivision du panier */
  $_SESSION['panier']['qte'] = array();
  $_SESSION['panier']['taille'] = array();
  $_SESSION['panier']['prix'] = array();

}

// Vérifiez si le bouton de vidage du panier a été cliqué
if (isset($_POST['vider_panier'])) {
    // Videz le panier en supprimant toutes les données de la session
    unset($_SESSION['panier']);
}


/* Affichons maintenant le contenu du panier : */
if (!empty($_SESSION['panier'])) {

      echo "<h2>Contenu du panier :</h2>";
      echo'<table class="table mb-5 p-5">
              <thead>
              <tr>
                <th scope="col">Article</th>
                <th scope="col">Qté</th>
                <th scope="col">Prix</th>
                <th>Taille</th>
              </tr>
            </thead>';
      foreach ($_SESSION['panier']['qte']['taille']['prix'] as $value => $quantite) {
        $produit = $value; 
        $req = $maBase->prepare('SELECT * FROM t_produit WHERE id_produit = :id');
        $req -> execute(array('id'=> $produit));
        $produit = $req->fetch();
          // Récupérez les détails du produit à partir de la base de données en utilisant $value si nécessaire
          // Affichez les détails du produit
          echo '
  
          <tbody>
            <tr>
              <td><img class="img-fluid w-25" src="inc/img/BOOTIC_IMG/'.$produit[8].'"></td>
              <td scope="row">'.$produit[3].'</td>            
              <td>'.$produit[4].'</td>
              <td></td>
            </tr>
          </tbody>';
  
      }
      echo'</table>';
  
      // Ajoutez un formulaire avec un bouton pour vider le panier
      echo '<form method="post">';
      echo '<input type="submit" name="vider_panier" value="Vider le panier">';
      echo '</form>';
  
  
  } else {
      echo "<h2>Le panier est vide</h2>";
  }
  
  include './inc/img/footer.inc.php';
  
?>










<?php

// VERSION CHAT GPT ET MOI MEME §§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§
// // Vérifiez si le panier existe dans la session, sinon initialisez-le
// if (!isset($_SESSION['panier'])) {
//     $_SESSION['panier'] = array();
// }

// // Vérifiez si l'ID du produit est passé via GET pour l'ajouter au panier
// if (isset($_GET['id'])) {
//     $productId = $_GET['id'];
//     $_SESSION['panier'][] = $productId;
// }



// // Affichez le contenu du panier
// if (!empty($_SESSION['panier'])) {



  
//     echo "<h2>Contenu du panier :</h2>";
//     echo'<table class="table mb-5 p-5">
//             <thead>
//             <tr>
//               <th scope="col" colspan="1" class="w-25">Photos</th>
//               <th scope="col">Article</th>
//               <th scope="col">Qté</th>
//               <th scope="col">Prix</th>
//             </tr>
//           </thead>';
//     foreach ($_SESSION['panier'] as $value) {
//       $req = $maBase->prepare('SELECT * FROM t_produit WHERE id_produit = :id');
//       $req -> execute(array('id'=> $value));
//       $value = $req->fetch();
//         // Récupérez les détails du produit à partir de la base de données en utilisant $value si nécessaire
//         // Affichez les détails du produit
//         echo '

//         <tbody>
//           <tr>
//             <td><img class="img-fluid w-25" src="inc/img/BOOTIC_IMG/'.$value[8].'"></td>
//             <td scope="row">'.$value[3].'</td>            
//             <td>'.$value[4].'</td>
//             <td></td>
//           </tr>
//         </tbody>';

//     }
//     echo'</table>';

//     // Ajoutez un formulaire avec un bouton pour vider le panier
//     echo '<form method="post">';
//     echo '<input type="submit" name="vider_panier" value="Vider le panier">';
//     echo '</form>';


// } else {
//     echo "<h2>Le panier est vide</h2>";
// }

// include './inc/img/footer.inc.php';
// 
?>


