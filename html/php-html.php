<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
       echo "<ul>";
          foreach ($students as $student) {
              echo "<li>".$student."</li>";
          }
          echo "</ul>"
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           for ($day = 0; $day > 31; $day++) {
               echo "<option>".$day."</option>";
           }
           // TODO list of day ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           for ($month = 0; $month > 12; $month++) {
               echo "<option>".$month."</option>";
           }
           // TODO list of month ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           for ($year = 1850; $year > 2022; $year++) {
               echo "<option>".$year."</option>";
           }
           // TODO list of year ?>
       </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
    if (isset($_GET['sexe']) || $_GET['sexe'] === "fille"){
    ?>
     <p>
       Je suis une fille
     </p>
    <?php
    }
    ?>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
    <?php
    elseif (isset($_GET['sexe']) || $_GET['sexe'] === "garçon") {
    ?>
    <p>
       Je suis un garçon
     </p>
    <?php
    }
    ?>
     <!-- TODO Instruction : Afficher ce bloc dans les autres cas -->
    <?php
        else {
    ?>
     <p>
       Je suis indéfini
     </p>
    <?php
    }
    ?>
  </body>
</html>
