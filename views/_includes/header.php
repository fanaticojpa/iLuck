<?php if ( ! defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="pt-BR">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="pt-BR">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="pt-BR">
<!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php echo HOME_URI;?>/views/_includes/_css/style.css">

	<!--/////////////////////////////////////////////////////////////////////-->
	<!--bibliotecas-->
	<link rel="stylesheet" href="<?php echo HOME_URI;?>/views/_includes/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo HOME_URI;?>/views/_includes/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

	<script type='text/javascript' src="<?php echo HOME_URI;?>/views/_includes/jQuery/jquery-3.1.1.min.js"></script>
	<script type='text/javascript' src="<?php echo HOME_URI;?>/views/_includes/jQuery/jquery.maskedinput-1.4.1.min_.js"></script>
	<!-- .js do bootstrap tem q ser depois da chamada da JQuey -->
	<script type='text/javascript' src="<?php echo HOME_URI;?>/views/_includes/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

	<!--Links-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

	<!--Links-->
	<!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>-->
	<!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>-->
	<!--<script type='text/javascript' src='http://digitalbush.com/wp-content/uploads/2013/01/jquery.maskedinput-1.3.1.min_.js'></script>-->

	<!--/////////////////////////////////////////////////////////////////////-->

	<script type='text/javascript'>
		
		function chooseSys() {
			alert('aqui');
		}
		
		function mascara(t, iMask){
			$('#'+t.id).mask(iMask);
		}
	</script>

	<!--[if lt IE 9]>
	<script src="<?php echo HOME_URI;?>/views/_js/scripts.js"></script>
	<![endif]-->

	<title><?php echo $this->title; ?></title>
</head>
<body>

<!-- <div class="main-page"> -->
