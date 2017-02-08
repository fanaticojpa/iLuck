<?php

//Números dos Jogos
define("_N_MEGASENA", 6);
define("_N_LOTOFACIL", 15);
define("_N_QUINA", 5);
define("_N_LOTOMANIA", 20);

//Jogos
define("_MEGASENA", 1);
define("_LOTOFACIL", 2);
define("_QUINA", 3);
define("_LOTOMANIA", 4);

define("_NOME_MEGASENA", "Mega Sena");
define("_NOME_LOTOFACIL", "Loto Facil");
define("_NOME_QUINA", "Quina");
define("_NOME_LOTOMANIA", "Loto Mania");

$pckTipoDeJogos = array();
$pckCorJogos = array();
global $pckTipoDeJogos, $pckCorJogos;

//Tipos de Jogos
$pckTipoDeJogos[_MEGASENA] = _NOME_MEGASENA;
$pckTipoDeJogos[_LOTOFACIL] = _NOME_LOTOFACIL;
$pckTipoDeJogos[_QUINA] = _NOME_QUINA;
$pckTipoDeJogos[_LOTOMANIA] = _NOME_LOTOMANIA;

//Cores
$pckCorJogos[_MEGASENA] = '#209869';
$pckCorJogos[_LOTOFACIL] = '#930089';
$pckCorJogos[_QUINA] = '#260085';
$pckCorJogos[_LOTOMANIA] = '#f78100';



?>

