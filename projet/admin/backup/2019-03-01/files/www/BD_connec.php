<?php
/**
 * Created by PhpStorm.
 * User: g17000304
 * Date: 28/02/19
 * Time: 13:53
 *
 */

session_start();


$json_result = false;
if (isset($_POST["pwd"]) and isset($_POST["id"])){
    $user=178442;
    $pass="antho13320";
    $pdo = new PDO('mysql:host=mysql-projet-cockail.alwaysdata.net;dbname=projet-cockail_bd', $user, $pass);

    $ID = $_POST["id"];
    $password= $_POST["pwd"];

    $stmt = $pdo->prepare("SELECT * FROM Projet WHERE Identifiant = ? and Mdp = ?");
    $stmt->execute(array($ID, $password));
    $result = $stmt->fetch(PDO::FETCH_OBJ);


    if ($ID === $result->Identifiant and  $password === $result->Mdp){
        $_SESSION["user id"] = $result->Identifiant;
        $json_result = true;
    }

}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($json_result);