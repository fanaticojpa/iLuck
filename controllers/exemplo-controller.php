<?php
class ExemploController extends MainController
{
	// URL: dominio.com/exemplo/
	public function index() {

		// Carrega o modelo
		$modelo = $this->load_model('exemplo/exemplo-model');

		//DataBase::insert_2("tabela_s",$modelo->parametros);
		DataBase::update_2("tabela_s", $modelo->parametros, "id='?'", $modelo->parametros);

		// Carrega o view
		//require_once ABSPATH . '/views/exemplo/exemplo-view.php';
		require_once ABSPATH . '/views/_modulos/exemplo/exemplo-view.php';
	}

	// URL: dominio.com/exemplo/outra-acao
	public function OutraAcao() {
		// Inclua seus models e views aqui
	}
}
