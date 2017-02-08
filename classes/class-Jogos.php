<?php

class Jogos{
	
	public static function TipoMaskJogo($qtdNumeros) {
		$mask = '';
		for ($i = 0; $i <= $qtdNumeros; $i++) {
			if ($i == $qtdNumeros) {
				$mask .= '99';
			} else {
				$mask .= '99-';
			}
		}
		return $mask;
	}

	public static function CorMaskJogo($id_jogo) {
		return $GLOBALS['pckCorJogos'][$id_jogo];
	}
	
}

?>
