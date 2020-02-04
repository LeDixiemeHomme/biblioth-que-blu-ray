<?php $this->titre = "Accueil";
/**
 * Created by PhpStorm.
 * Utilisateur: benoi
 * Date: 17/04/2019
 * Time: 23:12
 */

// foreach ($listing as $variable) {

//     echo($variable['titre_film'] . " | ");
//     echo($variable['date_sortie'] . " | ");
//     echo($variable['nom_realisateur'] . " | ");
//     echo($variable['nom_genre']);
//     echo("<br><br>");
// }

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre film</th>
      <th scope="col">Date sortie</th>
      <th scope="col">Realisateur</th>
      <th scope="col">Genre</th>
    </tr>
  </thead>
  <tbody><?php 
    foreach ($listing as $variable) { ?>

    <tr>
      <td><?= $variable['titre_film'] ?></td>
      <td><?= $variable['date_sortie'] ?></td>
      <td><?= $variable['nom_realisateur'] ?></td>
      <td><?= $variable['nom_genre'] ?></td>
    </tr>

    <?php } ?>
  </tbody>
</table>