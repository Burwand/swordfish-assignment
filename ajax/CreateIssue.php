<?php
require __DIR__ . '/../vendor/autoload.php';
$git = new GithubController();

$title = $description = $priority = $client = $type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = testInput($_POST["title"]);
    $description = testInput($_POST["description"]);
    $priority = testInput($_POST["priority"]);
    $client = testInput($_POST["client"]);
    $type = testInput($_POST["type"]);

    if(empty($title) ||empty($description) ||empty($priority) ||empty($client) ||empty($type))
    {
        echo json_encode(["status" => 400, 'message' => 'Invalid form data!']);
        return;
    }

    echo json_encode($git->createIssue($_POST));
}

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}