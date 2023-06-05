<?php

session_start();

if(isset($_SESSION['id']))
{
	unset($_SESSION['id']);

}

header('Location: ' . $_SERVER["HTTP_REFERER"] );
die;