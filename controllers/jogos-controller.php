<?php
class JogosController extends MainController
{
	// URL: dominio.com/exemplo/
	public function index() {
		
		$this->title = 'Jogos';
		
		// Carrega o modelo
		//$modelo = $this->load_model('exemplo/exemplo-model');
		
		// Carrega o view
		require_once ABSPATH.'/includes/_picklists/TiposDeJogos.php';
		
		require ABSPATH . '/views/_includes/header.php';
		
		require ABSPATH . '/views/_includes/menu2.php';
		
		require_once ABSPATH . '/views/_modulos/jogos/jogos-view.php';
	}
	
	// URL: dominio.com/exemplo/outra-acao
	public function OutraAcao() {
		// Inclua seus models e views aqui
	}
}