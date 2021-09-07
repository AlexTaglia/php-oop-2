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

// importo i file
require_once('eshop.php');
require_once('product.php');
require_once('user.php');

//  Creo l'e-shop
$Emezzon = new EShop('amazon', 'Via degli Alberi,1');
var_dump($Emezzon);

// Creo i prodotti

// Aggiungo i prodotti all'eshop

// Creo l'utente

// Creo l'utente premium