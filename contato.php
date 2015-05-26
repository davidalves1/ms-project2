<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--Script-->
<script type="text/javascript" src="scripts/script.js"></script>

<!-- JQuery -->
<script type="text/javascript" src="scripts/jquery_min.js"></script>

<!-- Slides -->
<script type="text/javascript" src="scripts/jqFancyTransitions.js" ></script>

<!-- Shadowbox -->
<link href="shadowbox/shadowbox.css" rel="stylesheet" type="text/css" />  
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>  
<script type="text/javascript">  
Shadowbox.init({  
language: 'pt',  
player: ['img', 'html', 'swf']  
});  
</script>
<!---------------->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content=" Montibeller Solutions - Sua solução em Sistemas!" />
<meta name="keywords" content="construtora, construção civil, engenharia, sistemas, web, redes, montibeller, solutions" />
<meta name="google-site-verification" content="iuOCOG4NvvoC3kABn3aNAEc6KM1NukRdUQR2Ro9MhOE" />
<meta name="googlebot" content="index" />
<title>Montibeller Solutions</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="tudo">
		<div id="topo">
        	<div id="logo">
            	<img src="imagens/logo_topo.png" />
            </div>
        	<div id="pesquisa">
            	<div id="borda-pesquisa"></div>
                <h2>Sua Solução em Sistemas</h2>
                <form name="pesquisa" id="campo-pesquisa" method="get" action="http://www.google.com/search">
                	<label>
						<input type="hidden" name="sitesearch" value="www.montibellersolutions.com.br" />
						<input type="text" name="q" size="20" value="Pesquise no site" onfocus="limpa(this);" onblur="preenche(this);" />
					</label>
					<label>	
						<input class="bt" type="submit" value="Procurar" />
					</label>
				</form>
            </div>
            <div id="menu-topo">
            	<img id="borda-menu-topo" src="imagens/borda_menu_topo.png" />
                <ul>
                	<li><a href="index.html">Home</a></li>
                    <li><a href="servicos.html">Serviços</a></li>
                    <li><a href="sobrenos.html">Sobre nós</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
        </div>
        <div id="esquerda">
        	<div id="form-contato">
        		<h3>Envie-nos sua dúvida, sugestão ou crítica!</h3>
 	           <form id="form-contato" method="post" action="enviaMensagem.php">
				<label>
					Nome
					<input name="nome" type="text" id="nome" autofocus />
				</label>
				<label>
					Email
					<input name="email" type="text" id="email" />
				</label>
				<label>
					Assunto
					<input name="assunto" type="text" id="assunto" />
				</label>
				<label>
					Mensagem
					<textarea name="mensagem"></textarea>
				</label>
					<input class="bt" type="submit" name="btnEnviar" value="Enviar" class="botao" />	
	            	<input class="bt" type="reset" name="btnLimpar" value="Limpar" class="botao"/>
				</form>
				<?php
					if (isset($_GET["Sucesso"])){
						$alerta = $_GET["Sucesso"];
						echo "<script language=javascript>
				      	alert ('$alerta')
				         </script>";
					}
					if (isset($_GET["Erro"])){
						$alerta = $_GET["Erro"];
						echo "<script language=javascript>
						alert ('$alerta')
				          </script>"; 
					}
				?>
			</div>
			<div id="localiza">
				<h3>Localização</h3>
				<p>Av. Carlos de Medeiros, n807, Ap.101 - Centro - Baixo Guandu, ES.<br />
                   Tel/Fax: 27 3732-4098 | Cel: 27 9254-6278</p>
				<iframe width="540" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=montibeller+solutions&amp;aq=&amp;sll=-19.771873,-40.506592&amp;sspn=1.574029,2.469177&amp;ie=UTF8&amp;z=17&amp;output=embed"></iframe>
			</div>
		</div>
        <div id="direita">
        	<h2>Notícias</h2>
        	<div id="noticias">
            	<!--RSS Tecnologia-->
                <script type="text/javascript" src="http://output25.rssinclude.com/output?type=js&amp;id=468266&amp;hash=1353bd10c76e5cb54400e2038a857a9f"></script>	
                <!--RSS Construção Civil-->
                <script type="text/javascript" src="http://output40.rssinclude.com/output?type=js&amp;id=468447&amp;hash=1aa66d5ea3a0140229640ee24740ec34"></script>
                </div>
            <h2>Social</h2>
            <div id="social">
            	<div id="fb-root"></div>
					<script>(function(d, s, id) {
  						var js, fjs = d.getElementsByTagName(s)[0];
 						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
  						js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=151587131617057";
  						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-like" data-href="http://www.montibellersolutions.com.br" data-send="true" data-width="290" data-show-faces="false"></div>
            </div>
        </div>
        <div id="rodape">
        	   	<ul id="menu-baixo">
                	<li><a href="index.html">Home</a></li>
                    <li><a href="servicos.html">Serviços</a></li>
                    <li><a href="sobrenos.html">Sobre nós</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="https://www.facebook.com/pages/Montibeller-Solutions/165594996829792" target="_blank">Facebook</a></li>
                </ul>
        </div>        
	</div>
</body>
</html>
