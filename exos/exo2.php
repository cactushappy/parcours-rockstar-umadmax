<?php
require_once '../inc/functions.php';
require '../vendor/autoload.php';

/*
 * Exo 2 : Groupie
 *
 * Bon, vous êtes arrivés mais des groupies en pagaille
 * bloquent l'entrée de la salle.
 *
 * La signature d'autographes s'impose.
 *
 * Notre `ConcertController` possède une méthode `autographe`
 * qui signe automatiquement un autographe en passant le nom de la groupie
 *
 * public function autographe($name) {
 *    return 'Avec tout mon amour, pour ' . $name;
 * }
 *
 * L'application doit être capable d'utiliser
 * l'adresse : /groupies/signer/<nom de la groupie>
 * pour renvoyer l'autographe signé
 *
 * $router devrait aider !
 */

 $router = new AltoRouter();
$router->map('GET', '/groupies/signer/[a:name]', 'ConcertController#autographe', 'autographe');


/*
 * Tests
 * Pas touche !
 */
displayExo(2, checkSign($router));
