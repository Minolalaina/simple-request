<?php
/*function validInput ($val){
	return htmlspecialchars(stripslashes(trim($val)));
}*/

function isValid ($val){
	$res=false;
	if (!empty($val)&& !is_null($val)){
		return htmlspecialchars(stripslashes(trim($val)));
		$res=true;
	}
	return $res;
}

extract($_POST);
 if (isValid($name) && isValid($firstname) && isValid($birth) && isValid($gender) && isValid($email) && isValid($pass) && isValid($conf_pass)) {
 	$contenu=PHP_EOL.$name.PHP_EOL.$firstname.PHP_EOL.$birth.PHP_EOL.$gender.PHP_EOL.$email.PHP_EOL.$pass.PHP_EOL.$conf_pass.PHP_EOL;
 	$file_name='info.txt';
 	if (!file_exists($file_name)) {
 		file_put_contents($file_name, $contenu);
 	}
 	else{
 		file_put_contents($file_name, $contenu, FILE_APPEND);
 	}
 	header('location:index.php');
 }
 else{
 	echo 'ERROR';
 }
