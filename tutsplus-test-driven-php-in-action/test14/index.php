<?php


require './src/WebService.php';

$action = isset($_GET['action']) ? $_GET['action'] : null;
$param  = isset($_GET['param'])  ? $_GET['param']  : null;

/* 最初是这样子的
switch($action) {
	case 'rotate':
		echo strrev($param);
		break;
	case 'length':
		echo strlen($param);
		break;
	default:
		echo 'method not found';
}

*/


/* 改进成这样子了 */
$ws = new WebService();
echo $ws->$action($param);

