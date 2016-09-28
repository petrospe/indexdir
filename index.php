<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<title>Index</title>
<style type="text/css">
/* BASIC RESET */
ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,body,html,p,blockquote,fieldset,input{margin:0; padding:0;}

/* HTML ELEMENTS */
body { background: linear-gradient(90deg, #1d1d1d, #343132); color: #fff; background-repeat:repeat-y; margin: 20px;}
h1 { font: bold 65px/60px Helvetica, Arial, Sans-serif; text-align: center; color: #eee; text-shadow: 0px 2px 6px #333; }
h1 small{ font-size: 20px; text-transform:uppercase; letter-spacing: 14px; display: block; color: #ccc; }
h2 a { display: block; text-decoration: none; margin: 0 0 30px 0; font: italic 45px Georgia, Times, Serif;  text-align: center; color: #bfe1f1; text-shadow: 0px 2px 6px #333; }
h2 a:hover { color: #90bcd0; }
h3 { font-style:italic; border-left:10px solid #eee; padding:10px 20px; margin:30px 0; color:#eee; }
h3 code { display:block; }
div { column-count: 3; }

/* WRAPPER */
#wrapper { width:800px; margin:40px auto; }

/* LIST #4 */
#list4 { width:75%; font-family:Georgia, Times, serif; font-size:15px;}
#list4 ul { list-style: none; }
#list4 ul li { float: left;	width: 33%;}
#list4 ul li a { display:block; text-decoration:none; color:#000000; background-color:#FFFFFF; line-height:30px;
	border-bottom-style:solid; border-bottom-width:1px; border-bottom-color:#CCCCCC; padding-left:10px; cursor:pointer; }
#list4 ul li a:hover { color:#FFFFFF; background:#4863A0; background-repeat:repeat-x; }
#list4 ul li a strong { margin-right:10px; }
</style>
</head>
<body>
<div id="list4">
<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
$d = dir(getcwd());
$blacklist = array('.', '..', '.directory');
echo "Server: ".gethostname()."<br>";
echo "Software: ".($_SERVER['SERVER_SOFTWARE']);
echo "<h2>Path: " . $d->path . "\n</h2>";
echo "<ul>";
while (false !== ($entry = $d->read()))
{
        if (!in_array($entry, $blacklist))
 {
   echo "<li><a href='{$entry}'>{$entry}</a></li>";
 }
}
echo "</ul>";
$d->close();
?>
</div>
</body>
</html>