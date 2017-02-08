<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<nav class="menu clearfix">
	<div style="width: 80%; background-color: red">
	<ul>
		<li><a href="<?php echo HOME_URI;?>">Home</a></li>
		<li><a href="<?php echo HOME_URI;?>/login/">Login</a></li>
		<li><a href="<?php echo HOME_URI;?>/user-register/">User Register</a></li>
		<li><a href="<?php echo HOME_URI;?>/noticias/">Notícias</a></li>
		<li><a href="<?php echo HOME_URI;?>/noticias/adm/">Notícias Admin</a></li>
		<li><a href="<?php echo HOME_URI;?>/exemplo/index/ii/iii/?op=igor">Exemplo básico</a></li>
		
		<li><a href="<?php echo HOME_URI;?>/jogos/">Jogos</a></li>
	</ul>
	</div>
	<!--<div>-->
<!--	<ul>
		<?php $tt = array('1'=>'Exempo','2'=>'Jogos')?>
		<li><?php global $pckTipoDeJogos; echo tag::selectPickVar('select-jogo', 'select-jogo', '', $tt, array('class'=>'form-control'), "onchange='chooseSys()'"); ?></li>
	</ul>-->
	<!--</div>-->
</nav>