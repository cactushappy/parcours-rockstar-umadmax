<?php
require_once '../inc/functions.php';

/*
 * Exo 4 : Inventaire
 *
 * Super !
 * Plus qu'à checker le matos !
 *
 * On prend chacun notre instrument et on l'accorde !
 *
 * Pour ça il faut écrire les classes ci dessous pour
 * retourner les bons textes des différentes fonctions
 *
 */

class Instrument {
  public $type;
}

class Musicien {

   private $name;
   private $job;
   private $instrument;

  public function __construct($name, $job) {
    $this->name = $name;
    $this->job = $job;
  }

  public function prendInstrument($instrument) {
    $this->instrument = $instrument;
  }

  public function accordeInstrument() {
    return $this->name. ' accorde son instrument ' .$this->instrument->type;
  }
}

class Guitare extends Instrument {
  public function __construct() {
    $this->type = 'guitare';
  }
}

class Batterie extends Instrument {
  public function __construct() {
    $this->type = 'batterie';
  }
}

$guitare = new Guitare();
$marc = new Musicien('Marc', 'Guitariste');
$marc->prendInstrument($guitare);
$marc->accordeInstrument(); // => return "Marc accorde son instrument guitare"

$batterie = new Batterie();
$joe = new Musicien('Joe', 'Batteur');
$joe->prendInstrument($batterie);
$joe->accordeInstrument(); // => return "Joe accorde son instrument batterie"





/*
 * Tests
 * Pas touche !
 */
displayExo(4, checkInstruments($marc, $joe));
