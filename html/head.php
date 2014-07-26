<meta charset="utf-8">
<title>Dennis</title>
<link href="//fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" type='text/css' href='css/special/normalize.css'/>

<?
	foreach(glob('css/auto/*') as $cssfile){ echo("<link rel='stylesheet' type='text/css' href='$cssfile'/>"); } // All from /css
	foreach(glob('js/top/*') as $jsfile){ echo("<script type='text/javascript' src='$jsfile'></script>"); } // All from /js
?>
