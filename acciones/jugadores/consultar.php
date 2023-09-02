<?php

require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';
require_once 'responses/consultarTodosResponse.php';
header('Content-Type: application/json');

$ctresp = new ConsultarTodosResponse();

$c1=new Club();
$c1->Nombre = "Paris Saint-Germain Football Club";
$c1->Fundacion = "2 de agosto de 1970 (52 años)";
$c1->Presidente = "Nasser Al-Khelaifi";

$c2=new Club();
$c2->Nombre = "Manchester United Football Club";
$c2->Fundacion = "5 de marzo de 1878 (144 años)";
$c2->Presidente = "Joel Glazer";

$j1=new jugador();
$j1->Id = 1 ;
$j1->Nombre = "La Pulga,  El Mesías,  D10S";
$j1->Apodos = "Lionel Andrés Messi";
$j1->Club = $c1;
$j1->Altura = "1.70 m";

$j2=new jugador();
$j2->Id = 2;
$j2->Nombre = "Lisandro Martínez";
$j2->Apodos = "Licha";
$j2->Club = $c2;
$j2->Altura = "1.75 m";

$ctresp->ListJugadores[]= $j1;
$ctresp->ListJugadores[]= $j2;

echo json_encode($ctresp);
