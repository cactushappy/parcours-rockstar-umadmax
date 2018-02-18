<?php
require_once '../inc/functions.php';

/*
 * Exo 3 : Loges
 *
 * On se prépare pour le concert, un dernier tour des partoches,
 * quelques médiators dans la poche,
 * les baguettes porte-bonheur,
 * Sans oublier le petit rituel de la bande avant d'y aller ...
 *
 * Un petit Pierre Papier Ciseaux pour connaître l'ordre d'entrée en scène
 *
 * Les valeurs acceptées sont
 * - rock
 * - paper
 * - scissors
 *
 * Le choix du joueur est placé en paramètre GET 'choice'
 *
 * Par exemple :
 *   rockPaperScissors() doit renvoyer un tableau associatif sous la forme
 *  [
 *    'user' => 'paper',
 *    'ia' => 'rock',
 *    'win' => true
 *  ]
 *
 */

$userChoice = $_GET['choice'];
$winCase = [
  'rock' => [
    'scissors' => true,
    'paper' => false
  ],
  'paper' => [
    'rock' => true,
    'scissors' => false
  ],
  'scissors' => [
    'rock' => false,
    'paper' => true
  ]
];

function rockPaperScissors($user) {

    global $winCase;
    global $userChoice;

    $choices = ['rock', 'paper', 'scissors'];

    // On récupère un index aléatoire dans $choices
    $aiChoice = array_rand($choices, 1);
    // Tant que la valeur de cet index est égale à $userChoice, on génère un nouvel index
    while($userChoice === $choices[$aiChoice]) {
      $aiChoice = array_rand($choices, 1);
    }

    return [
      'user' => $userChoice, // Choix de l'utilisateur
      'ia' => $choices[$aiChoice], // Choix aléatoire
      'win' => $winCase[$userChoice][$choices[$aiChoice]], // L'utilisateur gagne ?
    ];
}


/*
 * Tests
 * Pas touche !
 */
displayExo(3, checkShifumi(rockPaperScissors($userChoice)));
