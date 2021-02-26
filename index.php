<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack 1</title>
</head>

<body>

  <h1>Snack - 1</h1>


  <?php

    /*
    Creiamo un array 'matches' contenente altri array i quali rappresentano
    delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite,
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55 - 60
    */

    $matches = [

      [
        "homeTeam" => "Olimpia Milano",
        "homePoints" => 55,

        "roadTeam" => "Cantù",
        "roadPoints" => 60,
      ],

      [
        "homeTeam" => "Trieste",
        "homePoints" => 54,

        "roadTeam" => "Reyer Venezia",
        "roadPoints" => 29,
      ],

      [
        "homeTeam" => "Fortitudo Bologna",
        "homePoints" => 15,

        "roadTeam" => "Virtus Roma",
        "roadPoints" => 25,
      ],

      [
        "homeTeam" => "Dinamo Sassari",
        "homePoints" => 35,

        "roadTeam" => "Victoria Libertas Pesaro",
        "roadPoints" => 30,
      ],

    ];


    for ($j=0; $j < count($matches); $j++) {

      $home = $matches[$j]["homeTeam"];
      $homePoints = $matches[$j]["homePoints"];
      $road = $matches[$j]["roadTeam"];
      $roadPoints = $matches[$j]["roadPoints"];

        echo
          $home . ' - ' . $road . ' | ' .
          strval($homePoints) . ' - ' .
          strval($roadPoints) . '<br><br>';
    }

  ?>
  <br>

  <hr>

  <br>

  <h1>Snack 2</h1>

  <?php

    /*
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. mail contenga un punto e una chiocciola
    3. age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $required1 = '@';
    $required2 = '.';

    if (strlen($name) > 3 && strpos($mail, $required1) !== false && strpos($mail, $required2) !== false &&  is_numeric($age) ) {
      echo 'Access granted. Welcome ' . '<b>' . $name . '!</b>';

    }else {
      echo '<b>Accesso Negato</b>';
    }

  ?>












</body>

</html>
