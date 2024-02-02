<!doctype html>
<html>
<header>
  <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
</header>

<body>
  <div id="conteneur">
    <h1>Les équipes de National League aha</h1>
    <table border="1">
      <tr>
        <td>ID</td>
        <td>Club</td>
      </tr>
      <?php
      require('ctrl.php');
      $ctrl= new Ctrl();
      $equipes = $ctrl->getEquipes();
      $id = 1; // Initialise l'ID à 1
      foreach ($equipes as $equipe) {
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$equipe</td>"; // Assurez-vous de remplacer 'nom' par la clé correcte dans votre tableau
        echo "</tr>";
        $id++; // Incrémente l'ID à chaque itération
      }
      ?>
    </table>
  </div>
</body>

</html>