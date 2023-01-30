
<?php
var_dump($_POST);
var_dump(empty($_POST['password']));
$login = $_POST['login'];
$password = $_POST['password'];
if(empty($login) || empty($password)) {
	echo "Error";
} else {
	echo "Вы используете логин $login и пароль $password";
}