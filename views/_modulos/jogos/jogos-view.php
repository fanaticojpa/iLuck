<?php
//xs -> Celuar
//sm -> Tablet
//md -> Desktop
?>

<!DOCTYPE html>
<html lang="pt-br">

<style>
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}


.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

#div_fundo_form{
	background-color: #006bae;
	color: white;
	padding: 50px; border-radius: 10%
}

.wrapper {
  height: 100%;
  min-height: 100%;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}
</style>
		
<?php
	$script = "
		<script type='text/javascript'>
			window.onload = function(){
				//$('div').find('input').prop('readonly', true);
				//$('div').find('input').prop('disabled', true);  
				//$('target :input').prop('disabled', true);
				$('#form_saveJogo').find('input').prop('disabled', true);  
			}

			function onChageForm() {
				var id_select = document.getElementById('select-jogo').value;
				var formFundo = document.getElementById('div_fundo_form');
				var cor = '';

				if (id_select == '0') {
					//$('div').find('input').prop('readonly', true);
					$('div').find('input').prop('disabled', true);
				}else {
					//$('div').find('input').prop('readonly', false);
					$('div').find('input').prop('disabled', false);
				}

				switch(id_select) {
					case '0':
						//Padr�o
					break;
					case '"._MEGASENA."':
						cor = '".jogos::CorMaskJogo(_MEGASENA)."';
						$('#jogo').mask('".jogos::TipoMaskJogo(_N_MEGASENA)."');
					break;
					case '"._LOTOFACIL."':
						cor = '".jogos::CorMaskJogo(_LOTOFACIL)."';
						$('#jogo').mask('".jogos::TipoMaskJogo(_N_LOTOFACIL)."');
					break;
					case '"._QUINA."':
						cor = '".jogos::CorMaskJogo(_QUINA)."';
						$('#jogo').mask('".jogos::TipoMaskJogo(_N_QUINA)."');
					break;
					case '"._LOTOMANIA."':
						cor = '".jogos::CorMaskJogo(_LOTOMANIA)."';
						$('#jogo').mask('".jogos::TipoMaskJogo(_N_LOTOMANIA)."');
					break;
				}
				formFundo.style.backgroundColor = cor;
			}
			</script>";

	echo $script;
	
	$form = '';
	$form .= "<form id='form_saveJogo' name='form_saveJogo' class='form-horizontal' method='post' action=''>";
		$form .= "<div class='row' style='padding-bottom: 5px'>";
			$form .= FormMaker::addFormGroupSingle('col-md-12 col-sm-12 col-xs-12', '', tag::selectPickVar('select-jogo', 'select-jogo', 0, $GLOBALS['pckTipoDeJogos'], array('class'=>'form-control'), 'onchange=onChageForm()'));
		$form .= "</div>";
		$form .= "<div class='row'>";
			$form .= FormMaker::addFormGroupSingle('col-md-4 col-sm-12 col-xs-12', 'N concurso', tag::inputNumber('nConcurso', 'nConcurso', '', array('step'=>'1', 'min'=>'0', 'class'=>'form-control', 'placeholder'=>'')), '20');
			$form .= FormMaker::addFormGroupSingle('col-md-7 col-sm-12 col-xs-12', 'Data', tag::InputDate('date' , 'date', '', array('type'=>'date', 'class'=>'form-control', 'id'=>'data', 'name'=>'data', 'min'=>'1999-01-01')));
		$form .= "</div>";
		$form .= "<div class='row'>";
			$form .= FormMaker::addFormGroupSingle('col-md-12 col-sm-12 col-xs-12', 'Jogo', tag::inputText('jogo', 'jogo', '', array('class'=>'form-control', 'placeholder'=>'')));
		$form .= "</div>";
		$form .= FormMaker::button('btn-insertJogo', 'Salvar', '', array('class'=>'btn btn-default btn-sm','style'=>'margin-left:65px; width: 100px;'), "onclick='sendAjax(\"#form_saveJogo\",\"insertJogo\");'");
	$form .= "</form>";

	//AJAX insertJogo
	
	////////////////////////////////////////////////////////////////////////////
	//html
	
	echo "<body>";
			echo "<div class='row main'>";
			echo "<div class='wrapper'>";
				echo "<div id='div_fundo_form' class='main-login main-center'>";
					echo $form;
				echo "</div>";
			echo "</div>";
	echo "</body>";

?>