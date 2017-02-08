<?php if(!defined('ABSPATH')) exit; ?>

<?php if ($this->login_required && !$this->logged_in) return; ?>


			<li><a href='index.php?page=tipogasto'> Tipo de Gastos</a></li>";

			<nav class='navbar navbar-inverse navbar-fixed-top'>
                  <div class='container'>
                      <div class='navbar-header'>
                        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                          <span class='sr-only'>Toggle navigation</span>
                          <span class='icon-bar'></span>
                          <span class='icon-bar'></span>
                          <span class='icon-bar'></span>
                        </button>
                        <a class='navbar-brand' href='<?php echo HOME_URI;?>'><?php echo $this->title ?> <span class='glyphicon glyphicon-piggy-bank' aria-hidden='true'></span></a>
                      </div>

                      <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                            <ul class='nav navbar-nav'>
								<li class='dropdown'>
									<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span class='glyphicon glyphicon-list' aria-hidden='true'></span> Lancamentos</span></a>
									<ul class='dropdown-menu'>
										<li><a href='"._BACK."_modules/mod_orcamento/'><span class='glyphicon glyphicon-usd' aria-hidden='true'></span>  Orcamento</a></li>
										<li><a href='"._BACK."_modules/mod_receita/'><span class='glyphicon glyphicon-usd' aria-hidden='true'></span>  Receita</a></li>
										<li><a href='"._BACK."_modules/mod_gasto/'><span class='glyphicon glyphicon-usd' aria-hidden='true'></span>  Gastos</a></li>
									</ul>
								</li>
								<li><a href='#'><span class='glyphicon glyphicon-briefcase' aria-hidden='true'></span> Relatorios</a></li>
							</ul>
                            <ul class='nav navbar-nav navbar-right'>
								<li><a href='#'><span class='glyphicon glyphicon-cog' aria-hidden='true'></span></a></li>
                                <li>
									<form name='out' id='out' method='POST' enctype='multipart/form-data'><input type='hidden' name='option' id='option' value='logoff'></form>
									<a onclick='sendAjax(\"#out\",\"login\");'><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> Sair</a>
								</li>
                            </ul>
                    </div><!-- /.navbar-collapse -->
                  </div>
                </nav>";

