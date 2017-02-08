<?php
/**
 * ConfiguraÃ§Ã£o geral
 */

//Caminho do Server C:/wamp64/www
define( 'DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

// Caminho para a raiz
define( 'ABSPATH', dirname(__FILE__));

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '/views/_uploads' );

// URL da home
define( 'HOME_URI', 'http://localhost:8080/Plataforma/systemas/iLuck' );

// Nome do host da base de dados
define( 'HOSTNAME', '' );

// Nome do DB
define( 'DB_NAME', '' );

// UsuÃ¡rio do DB
define( 'DB_USER', 'root' );

// Senha do DB
define( 'DB_PASSWORD', '31510736' );

// Charset da conex�o PDO
define( 'DB_CHARSET', 'utf8' );

// Se vocÃª estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

/**
 * NÃ£o edite daqui em diante
 */

// Carrega o loader, que vai carregar a aplica��o inteira
require_once ABSPATH . '/loader.php';
?>