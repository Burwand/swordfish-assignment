<?php
require __DIR__ . '/vendor/autoload.php';
$git = new GithubController();
$smarty = new Smarty();

if (isset($_GET["code"]) && ! empty($_GET["code"]))
{
    $token = $git->getToken($_GET["code"]);
    if ( ! $token)
    {
        $smarty->display('index.tpl');

        return;
    }
    $_SESSION["token"] = $token;
}
//$_SESSION["token"] = '';
if ( ! isset($_SESSION["token"]) || empty($_SESSION["token"]))
    header("location: https://github.com/login/oauth/authorize?client_id={$git->clientId}&allow_signup=false&scope=user,public_repo");

$smarty->display('index.tpl');