<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Help.Giti.me</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
</head>
<body>
<?php
require 'markdown.php';
echo Markdown(file_get_contents('Tutorial.md'));
?>
</body>
</html>
