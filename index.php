<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); 
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).
---------------------------------------------------------------------------
*/

//------------------------------------
// importo i file
require_once('eshop.php');
require_once('product.php');
require_once('user.php');

//------------------------------------
//  Creo l'e-shop
echo "<hr>";
echo "E-SHOP";
$Emezzon = new EShop('amazon', 'Via degli Alberi,1');
var_dump($Emezzon);

//------------------------------------
// Creo i prodotti
echo "<br/><hr>";
echo "Creazione prodotti";

$iphone = new TechProduct('iphone', 'smartphone', 999);
$table = new HomeProduct('table', 'wooden table', 100);
$chair = new HomeProduct('chair', 'steel chair', 50);

var_dump($iphone);
var_dump($table);
var_dump($chair);

//------------------------------------
// Aggiungo i prodotti all'eshop
echo "<br/><hr>";
echo "Prodotti aggiunti nell'eshop";
$Emezzon->addPorduct($iphone);
$Emezzon->addPorduct($table);
$Emezzon->addPorduct($chair);

var_dump($Emezzon->getProducts());

//------------------------------------
// Creo l'utente
echo "<br/><hr>";
echo "Utente creato";
$user1 = new User('Pinco', 'Palla', 'pinco@palla.com', '1234', "5151548454804848", "31/12/2020");

var_dump($user1);

//------------------------------------
// Creo l'utente premium
echo "<br/><hr>";
echo "Utente Premium";
$userPremium1 = new PremiumUser('Mario', 'Rossi', 'Mario@rossi.com', '0000', "5152548554804884", "31/12/2021");

var_dump($userPremium1);

//------------------------------------
// Aggiungo gli utenti all'eshop
echo "<br/><hr>";
echo "Utenti aggiunti all'eshop";
$Emezzon->addUsers($user1);
$Emezzon->addUsers($userPremium1);

var_dump($Emezzon->getUsers());

//------------------------------------
// Aggiungo il prodotto al carrello dell'utente e sommo il totale
echo "<br/><hr>";
echo "Aggiungo il prodotto al carrello dell'utente e calcolo la somma";
$user1->addPorduct($iphone);
$user1->addPorduct($table);

var_dump($user1);
echo "<br/>";
$total = $user1->totalToPay();
echo "Totale da pagare: $total";

//------------------------------------
// Aggiungo il prodotto al carrello dell'utente Premium e sommo il totale includendo lo sconto
echo "<br/><hr>";
echo "Aggiungo il prodotto al carrello dell'utente e calcolo la somma con lo sconto";
$userPremium1->addPorduct($iphone);
$userPremium1->addPorduct($table);

var_dump($userPremium1);
echo "<br/>";
$total = $userPremium1->totalToPay();
echo "Totale da pagare con sconto: $total";
