
<?php include 'load.php'; ?>

<?php 
$string = PHP_EOL . $_GET['cual'] . ";" . $_GET['color'];
$archivo = fopen($_GET['en'], "a");
fwrite($archivo, $string);
fclose($archivo);


print '<meta http-equiv="refresh" content="1;url=index.php">';




?>