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
	<title>��������� ��������� ������ anonym.zone66.su</title>
	<link rel="icon" href="http://anonym.zone66.su/favicon.ico" type="image/ico" />

	<link rel="stylesheet" type="text/css" href="http://anonym.zone66.su/style.css" />
	<script type="text/javascript" src="http://anonym.zone66.su/anonyminizerTool.js"></script>
</head>

	
<body>
	<div id="page">
		<div id="header"></div>			
		
		<div id="content">
			<div class="lang_content">

			<h1>��������� ��������� ������ anonym.zone66.su</h1>
			
			<div style="text-align: center" class="nav_symbols">
				<div style="width: 180px; float: left;">
					<a href="#singleLink"><img src="http://anonym.zone66.su/img/link.gif" alt="������������ ���� ��������� ������" title="������������ ���� ��������� ������" /></a><br />
					<a href="#singleLink">������������ ���� ��������� ������</a>
				</div>
			
				<div style="width: 180px; float: left; margin-left: 20px;">
					<a href="#multiLink"><img src="http://anonym.zone66.su/img/script.gif" alt="������ ������������ ��������� ������ ��� ��������� �������� ��� ������" title=" ������ ������������ ��������� ������ ��� ��������� �������� ��� ������" /></a><br />

					<a href="#multiLink">������ ������������ ��������� ������ ��� ��������� �������� ��� ������</a>
				</div>
				<div style="width: 180px; float: left; margin-left: 20px;">
					<a href="#info"><img src="http://anonym.zone66.su/img/warum.gif" alt="������ anonym.zone66.su?" title="������ anonym.zone66.su?" /></a><br />
					<a href="#info">������ anonym.zone66.su?</a>
				</div>
			
			</div>
			<div class="clearer"></div>

			<br />

			<h2 id="singleLink">������������ ���� ��������� ������</h2>
			<p>��� ��������� ��������� ��������� ������ ������ �������� ������, ������� �� ������ ������� ���������, � ������� �� "������������ ������".</p>

			<form name="theform" onSubmit="return go();" action="#">
				<fieldset>
					<h3>���� ������</h3>

					<input class="anonym_input" type="text" maxlength="255" name="nick" value="http://" />
					<input class="anonym_FormSubmit" type="button" onClick=javascript:go() value="��������� ������" /><br /><br />
			
					<h3>��������� ������:</h3>
					<textarea class="anonym_textarea" name="thelink1" wrap="soft" cols="66" rows="1" style="height: 30px; overflow: auto;"></textarea><br />
					<br /><h3>HTML-��� ��������� ������:</h3>
					<textarea class="anonym_textarea_big" name="thelink2" wrap="soft" cols="66" rows="1" style="height: 30px; overflow: auto;"></textarea><br />
					<br /><h3>��� ��������� ������ ��� ������ (�������� � ����� ������� ������):</h3>

					<textarea class="anonym_textarea_big" name="thelink3" wrap="soft" cols="66" rows="1" style="height: 30px; overflow: auto;"></textarea><br />
			
				</fieldset>
			</form>
			<br /><br />

			<h2 id="multiLink">������ ������������ ��������� ������ ��� ����� ��� ������</h2>
			<p>���� �� ������ ������ ������� ���������� ��� ������ ������ ����� ��� ������, �� �� ������
			������������ ������, ������� ����� ������ ��� �������������. ������� ������ ������, ��� �������
			������ �� ������ ��������� ��������� ������ (��������, ����� ������ �����) � ������� ��
			"������������ ������" (���� �� ������, ����� ��� ������ ���� ����������, �� �������� ���� ������).</p>
			<br />

			
			<form name="displayResult" onsubmit="return false;" action="#">
				<fieldset class="embeddingData">
					<label for="embeddingCode" accesskey="2" style="padding-top: 4px; display: block;">������ ��� �� ������ �������� � ����� �������/��������� ���� ������ ����� (����� ����� ��� ������� ����� html-����� &lt;/body&gt;). (<a href="#anleitung">��������� ��������</a>)</label>
			
					<textarea class="anonym_textarea" id="embeddingCode" name="embeddingCode"></textarea>
					<input class="anonym_FormSubmit" type="button" name="markAll" id="markAll" value="������� ���" onclick="document.displayResult.embeddingCode.select();" />
				</fieldset>

			</form>
			<br />
			<form name="anonymizerForm" onsubmit="generateCode('anonymizerForm', 'embeddingCode'); return false;" action="#">
				<fieldset class="generationData">
					<label for="keywordsInput" accesskey="1" style="padding-top: 4px; display: block;">��� ��������� ������� �� ��������� ��������� ������ (��������� ��������: domain1.tld, domain2.tld, keyword1, ...):</label>
					<input type="text" id="keywordsInput" name="keywords" class="anonym_input" /><br />
					<input type="submit" id="submitButton" value="������������" class="anonym_FormSubmit" />
			
				</fieldset>

			</form>
			<br /><br />
			<script type="text/javascript">
			   generateCode("anonymizerForm", "embeddingCode");
			</script>
			
			<h2 id="info">��� ���� �������������� ��������� ������ ����� anonym.zone66.su</h2>
			<p>�������������� ����� ��� ������ anonym.zone66.su ������ ���� ���� �� ������ ���������� 
			��������� ��������, �� ������� ��������� ������ � ������ ���-�����, ��� ����� 
			��������� ���� �������� �� ������ ������ � ������ ����� � ��� ������ ����������.<br />
			������������ ������ ������� ����� ������: <a href="http://anonym.zone66.su/?http://www.gulli.com/">http://anonym.zone66.su/?http://www.gulli.com/</a>

			��������� �������� �� <a href="http://www.gulli.com/">gulli.com</a>, ��� ���� ��������, � 
			������� ��������� ��������������� �������� ����������� � �� ���������� � ������ ����������
			� ����� �������.</p>
			
			<br /><br />
			
			<h2 id="anleitung">��������� �������� ������� ��� ��������� ��������� ������</h2>
			<p>��� ����������� ������� � ������ �����, ��� ������, �� ����������� �������� 
			�������/������ �������� ��� ���������, ����� ���������������� ����� anonym.zone66.su.
			���� �� ����������� Wordpress, �� ����� ������ ������ ��� ������� ������� ������ ���� 
			footer.php.<br />

			�.�. ������ ������� ��������� ������ ������ ��� ������ ��������� �� ������ �������, �� 
			����� ����� �������� ��� � �������� ���� ����� ��� ����� ����. ������, ������� ���������
			���� ���� ������ �������, �� ����� �������������� ����� anonym.zone66.su.<br />
			<br />
			anonym.zone66.su �������� ������ ��������� (�����, � �������� ������� �������� �� ����).</a>.</p>

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
