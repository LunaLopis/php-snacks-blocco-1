<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$partite = [
  [
    'casa' => 'Olimpia Milano',
    'ospite' => 'Cantù',
    'punti_casa' => 55,
    'punti_ospite' => 60,
  ],
  [
    'casa' => '	Dinamo Sassari',
    'ospite' => 'V.L. Pesaro',
    'punti_casa' => 58,
    'punti_ospite' => 90,
  ],
  [
    'casa' => ' Reyer Venezia',
    'ospite' => 'Virtus Roma',
    'punti_casa' => 49,
    'punti_ospite' => 50,
  ],
  [
    'casa' => '	Juvecaserta',
    'ospite' => 'Viola R. Calabria',
    'punti_casa' => 55,
    'punti_ospite' => 60,
  ],

];

foreach($partite as $partita){
  echo $partita['casa'] . " - " . $partita['ospite'] . " = " . $partita['punti_casa'] . "-" . $partita['punti_ospite'];
}


// snack 2
$name = '';
$mail = '';
$age = '';


// Snack 3


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <form action="index.php" class="mt-5" method="GET">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="age" placeholder="age">
            <input type="text" name="mail" placeholder="mail">
            <input type="submit" value="Invia">                            
      </form>
      <h4>
      <?php 
      if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
      
        if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
          echo "<br /> Benvenuto "  .$name." ".$age."<br />" ?? 'inserisci dati'; 
        } else {
            echo "Accesso negato";
        }
      } else {
        echo "insersci i dati";
      }
      
      ?>
      </h4>

      <h4>
          <?php
          foreach ($posts as $date => $postArray) {
            echo "Data: " . $date . "<br>";
            foreach ($postArray as $post) {
              echo "Titolo: " . $post['title'] . "<br>";
              echo "Autore: " . $post['author'] . "<br>";
              echo "Testo: " . $post['text'] . "<br>";
              echo "<br>";
            }
          }
          ?>
      </h4>
</body>
</html>