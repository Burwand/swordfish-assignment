<?php
require __DIR__ . '/../vendor/autoload.php';
$git = new GithubController();

$title = $description = $priority = $client = $type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = testInput($_POST["title"]);
    $email = testInput($_POST["description"]);
    $website = testInput($_POST["priority"]);
    $comment = testInput($_POST["client"]);
    $gender = testInput($_POST["type"]);

    echo json_encode($git->createIssue($_POST));
}

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}