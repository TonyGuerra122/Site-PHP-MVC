<?php 
include("./UserControl.php");

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else if(isset($_POST['action'])){
    $action = $_POST['action'];
}
$email = (!isset($_SESSION['email'])) ? $_POST['email'] : $_SESSION['email'];
$senha = (!isset($_SESSION['senha'])) ? $_POST['senha'] : $_SESSION['senha'];
$userControl = new UserControl($email, $senha);
switch($action){
    case "Logou":
        header("Content-Type: application/json; charset='UTF8'", true);
        echo json_encode($userControl->verifyLogin());
        break;
    case "Deslogou":
        header("Content-Type: application/json; charset='UTF8'", true);
        echo json_encode($userControl->deslogar());
    default:
        break;
}