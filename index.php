<?php

require_once __DIR__ .  "/Classes/Prodotto.php";
require_once __DIR__ .   "./Classes/ProdottoCibo.php";
require_once __DIR__ .   "./Classes/ProdottoAccessorio.php";
require_once __DIR__ .   "./Classes/ProdottoGioco.php";
require_once __DIR__ .   "./Classes/Utente.php";
require_once __DIR__ .   "./Classes/Carta.php";


/*
CREAZIONE INSTANZE CLASSI
*/

$crocchetteCani = new ProdottoCibo
("crocchette" , "4.99€" , 
"Crocchette per cani prodotte dalla migliore azienda di crocchette d'italia" , "23/11/2024" , 
["Ingrediente 1" , "Ingrediente 2" , "Ingrediente 3"]);

$crocchetteGatti = new ProdottoCibo("crocchette" , "4.99€" , 
"Crocchette per gatti prodotte dalla migliore azienda di crocchette d'italia" , "05/03/2023" , 
["Ingrediente 1" , "Ingrediente 2" , "Ingrediente 3"]);

$cucciaCani = new ProdottoAccessorio
("Cuccia" , "27.99" , 
"Cuccia di grande dimensioni lavabile per cani" , 
"Grigio" , "Poliestere" );

$pallaRimbalzante = new ProdottoGioco
("Palla" , "7.99€" , "Palla per cani rimbalzante resistente in gomma naturale" , "Verde" , "Gomma Naturale");


$UtenteUno = new Utente("Mario" , "Rossi" , "mariorossi@gmail.com"  , "MarioRossi111" , true , "1237637384272632" , "100" , "2026");

$UtenteDue = new Utente("Luigi" , "Verdi" , "luigiverdi@gmail.com"  , "LuigiVerdi222" , false , "6292173483261275" , "166" , "2020");


$UtenteUno->setCart($crocchetteCani);
$UtenteUno->setCart($crocchetteGatti);
$UtenteUno->setCart($pallaRimbalzante);
$UtenteUno->setCart($pallaRimbalzante);
$UtenteDue->setCart($crocchetteGatti);
$UtenteDue->setCart($cucciaCani);
$UtenteDue->setCart($pallaRimbalzante);
$UtenteDue->setCart($pallaRimbalzante);

$UtenteUnoExpire = $UtenteUno->getExpiryDate();
$UtenteDueExpire = $UtenteDue->getExpiryDate();

echo "<h1>";
if(($UtenteUno->isExpired($UtenteUnoExpire))){
    echo "La Utente di UtenteUno è scaduta";
}
else 
    echo "La Utente di UtenteDue non è scaduta";

echo "<br>";

    if(($UtenteDue->isExpired($UtenteDueExpire))){
        echo "La Utente di UtenteDue è scaduta";
        
    }
    else 
        echo "La Utente di UtenteDue non è scaduta";
    

echo "</h1>";

echo "<h2>Utente Uno</h2>";
var_dump($UtenteUno);
echo "<h2>Utente Due</h2>";
var_dump($UtenteDue);
