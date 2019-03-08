<?php
/**
 * Created by PhpStorm.
 * User: g17000304
 * Date: 28/02/19
 * Time: 15:49
 */
session_start();

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode(isset($_SESSION["user id"]));