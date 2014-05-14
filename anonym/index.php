<?php
error_reporting(0);

if (isset($_SERVER['argv'][0]) and preg_match("#$http://#i",$_SERVER['argv'][0]))
{
$url=preg_replace("/[<]/", "&lt;", $_SERVER['argv'][0]);
$url=preg_replace("/[>]/", "&gt;", $url);
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
	\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
	<meta http-equiv=\"refresh\" content=\"1; URL=".$url."\">
	<title>anonym.zone66.su - free dereferer service</title>
	<link rel=\"icon\" href=\"http://anonym.zone66.su/favicon.ico\" type=\"image/ico\" />
	<style type=\"text/css\">
	html {
		background: #000;
	}
	body {
		background: #404040;
		border: 1px solid #666;
		color: #999;
		font: 14px \"Lucida Grande\", \"Lucida Sans Unicode\", tahoma, verdana, arial, sans-serif;
		margin: 5% 10%;
		text-align: center;
	}
	
	a {
		color: #FF8301;
	}
	
	h1 {
		color: #EEE;
	}
	
	#container {
		background: #292929;
		line-height: 2.4;
		padding: 1em;
	}
	
	p#url {
		font-weight: bold;
		overflow: hidden;
		width: 100%;
	}
	
	</style>
</head>

<body>

	<h1>anonym.zone66.su</h1>
	<div id=\"container\">

		
		<p>Please wait while you're being redirected to ...<br />
		In einer Sekunde geht es zu ...<br />
		Espera mientras te redireccionamos a ...<br />
		&#1055;&#1086;&#1078;&#1072;&#1083;&#1091;&#1081;&#1089;&#1090;&#1072;&#44;&#32;&#1087;&#1086;&#1076;&#1086;&#1078;&#1076;&#1080;&#1090;&#1077;&#46;&#32;&#1057;&#1077;&#1081;&#1095;&#1072;&#1089;&#32;&#1074;&#1099;&#32;&#1073;&#1091;&#1076;&#1077;&#1090;&#1077;&#32;&#1087;&#1077;&#1088;&#1077;&#1084;&#1077;&#1097;&#1077;&#1085;&#1099;&#32;&#1085;&#1072;&#32;&#46;&#46;&#46;</p>
		<p id=\"url\"><a href=\"".$url."\">".$url."</a></p>

		<hr />
		<p><a href=\"http://anonym.zone66.su/\">anonym.zone66.su</a></p>
		
	</div>

 
</body>
</html>";
exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<meta name="verify-v1" content="5+7GqX6rLdgyCzS6vxgagmW5sm1aOYNVhNSlVlaH/xY=" >
	<meta name="description" content="anonymize your links with anonym.zone66.su" />
	<meta name="keywords" content="anonymous,link,url,redirect,forum,board,script,domain,external,hompage" />
	<title>Генератор анонимных ссылок anonym.zone66.su</title>
	<link rel="icon" href="http://anonym.zone66.su/favicon.ico" type="image/ico" />

	<link rel="stylesheet" type="text/css" href="http://anonym.zone66.su/style.css" />
	<script type="text/javascript" src="http://anonym.zone66.su/anonyminizerTool.js"></script>
</head>

	
<body>
	<div id="page">
		<div id="header"></div>			
		
		<div id="content">
			<div class="lang_content">

			<h1>Генератор анонимных ссылок anonym.zone66.su</h1>
			
			<div style="text-align: center" class="nav_symbols">
				<div style="width: 180px; float: left;">
					<a href="#singleLink"><img src="http://anonym.zone66.su/img/link.gif" alt="Генерировать одну анонимную ссылку" title="Генерировать одну анонимную ссылку" /></a><br />
					<a href="#singleLink">Генерировать одну анонимную ссылку</a>
				</div>
			
				<div style="width: 180px; float: left; margin-left: 20px;">
					<a href="#multiLink"><img src="http://anonym.zone66.su/img/script.gif" alt="Скрипт генерирующий анонимные ссылки для отдельной страницы или форума" title=" Скрипт генерирующий анонимные ссылки для отдельной страницы или форума" /></a><br />

					<a href="#multiLink">Скрипт генерирующий анонимные ссылки для отдельной страницы или форума</a>
				</div>
				<div style="width: 180px; float: left; margin-left: 20px;">
					<a href="#info"><img src="http://anonym.zone66.su/img/warum.gif" alt="Почему anonym.zone66.su?" title="Почему anonym.zone66.su?" /></a><br />
					<a href="#info">Почему anonym.zone66.su?</a>
				</div>
			
			</div>
			<div class="clearer"></div>

			<br />

			<h2 id="singleLink">Генерировать одну анонимную ссылку</h2>
			<p>Для генерации отдельной анонимной ссылки просто вставьте ссылку, которую Вы хотите сделать анонимной, и нажмите на "Генерировать ссылку".</p>

			<form name="theform" onSubmit="return go();" action="#">
				<fieldset>
					<h3>Ваша ссылка</h3>

					<input class="anonym_input" type="text" maxlength="255" name="nick" value="http://" />
					<input class="anonym_FormSubmit" type="button" onClick=javascript:go() value="Анонимная ссылка" /><br /><br />
			
					<h3>Анонимная ссылка:</h3>
					<textarea class="anonym_textarea" name="thelink1" wrap="soft" cols="66" rows="1" style="height: 30px; overflow: auto;"></textarea><br />
					<br /><h3>HTML-код анонимной ссылки:</h3>
					<textarea class="anonym_textarea_big" name="thelink2" wrap="soft" cols="66" rows="1" style="height: 30px; overflow: auto;"></textarea><br />
					<br /><h3>Код анонимной ссылки для форума (работает с любым движком форума):</h3>

					<textarea class="anonym_textarea_big" name="thelink3" wrap="soft" cols="66" rows="1" style="height: 30px; overflow: auto;"></textarea><br />
			
				</fieldset>
			</form>
			<br /><br />

			<h2 id="multiLink">Скрипт генерирующий анонимные ссылки для сайта или форума</h2>
			<p>Если Вы хотите хотите сделать анонимными все ссылки Вашего сайта или форума, то Вы можете
			генерировать скрипт, который будет делать это автоматически. Введите адреса сайтов, для которых
			скрипт не должен создавать анонимные ссылки (например, адрес Вашего сайта) и нажмите на
			"Генерировать скрипт" (если Вы хотите, чтобы все ссылки были анонимными, то оставьте поле пустым).</p>
			<br />

			
			<form name="displayResult" onsubmit="return false;" action="#">
				<fieldset class="embeddingData">
					<label for="embeddingCode" accesskey="2" style="padding-top: 4px; display: block;">Данный код Вы должны вставить в конец шаблона/исходного кода Вашего сайта (лучше всего это сделать перед html-тэгом &lt;/body&gt;). (<a href="#anleitung">Подробное описание</a>)</label>
			
					<textarea class="anonym_textarea" id="embeddingCode" name="embeddingCode"></textarea>
					<input class="anonym_FormSubmit" type="button" name="markAll" id="markAll" value="выбрать все" onclick="document.displayResult.embeddingCode.select();" />
				</fieldset>

			</form>
			<br />
			<form name="anonymizerForm" onsubmit="generateCode('anonymizerForm', 'embeddingCode'); return false;" action="#">
				<fieldset class="generationData">
					<label for="keywordsInput" accesskey="1" style="padding-top: 4px; display: block;">Для следующий адресов не создавать анонимные ссылки (разделять запятыми: domain1.tld, domain2.tld, keyword1, ...):</label>
					<input type="text" id="keywordsInput" name="keywords" class="anonym_input" /><br />
					<input type="submit" id="submitButton" value="генерировать" class="anonym_FormSubmit" />
			
				</fieldset>

			</form>
			<br /><br />
			<script type="text/javascript">
			   generateCode("anonymizerForm", "embeddingCode");
			</script>
			
			<h2 id="info">Для чего перенаправлять исходящие ссылки через anonym.zone66.su</h2>
			<p>Администраторы могут при помощи anonym.zone66.su убрать свой сайт из списка рефераллов 
			логфайлов серверов, на которые указывают ссылки с Вашего веб-сайта, тем самым 
			владельцы этих ресурсов не смогут узнать с какого сайта к ним пришли посетители.<br />
			Использовать данную функцию очень просто: <a href="http://anonym.zone66.su/?http://www.gulli.com/">http://anonym.zone66.su/?http://www.gulli.com/</a>

			ссылается анонимно на <a href="http://www.gulli.com/">gulli.com</a>, при этом страница, с 
			которой произошло перенаправление остается неизвестной и не появляется в списке рефераллов
			в логах сервера.</p>
			
			<br /><br />
			
			<h2 id="anleitung">Подробное описание скрипта для генерации анонимных ссылок</h2>
			<p>При подключении скрипта к Вашему сайту, все ссылки, за исключением заданных 
			адресов/ссылок заданных при генерации, будут перенаправляться через anonym.zone66.su.
			Если Вы используете Wordpress, то самым лучшим местом для вставки скрипта служит файл 
			footer.php.<br />

			Т.к. скрипт создает анонимные ссылки только для ссылок указанных до самого скрипта, то 
			лучше всего вставить его в исходном коде сайта как можно ниже. Ссылки, которые находятся
			ниже кода самого скрипта, не будут перенаправлены через anonym.zone66.su.<br />
			<br />
			anonym.zone66.su заменяет только рефералла (адрес, с которого человек попадает на сайт).</a>.</p>

			<div class="clearer"></div>

			</div>
		</div>

		
		<div id="footer">
			<div id="footer_inside">
				<p>
					
				</p>
				<div class="sp16"></div>
			</div>
		</div>		
	</div>
</body>
</html>
