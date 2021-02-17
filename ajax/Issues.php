<?php
require __DIR__ . '/../vendor/autoload.php';
$git = new GithubController();
$issues = $git->getIssues();

$issueList = [];

foreach ($issues as $issue)
{
    $item = [];
    $item['title'] = htmlspecialchars($issue->title);
    $item['state'] = htmlspecialchars($issue->state);
    $item['body'] = htmlspecialchars($issue->body);
    $item['user'] = htmlspecialchars($issue->user->login);

    foreach ($issue->labels as $label)
    {
        preg_match_all('/P:(.*)|C:(.*)|T:(.*)/m', $label->name, $matches, PREG_SET_ORDER, 0);
        if(!isset($matches[0]))
            continue;
        $matches = $matches[0];

        if (isset($matches[1]) && $matches[1] != '')
            $item['priority'] = htmlspecialchars($matches[1]);
        if (isset($matches[2]) && $matches[2] != '')
            $item['client'] = htmlspecialchars($matches[2]);
        if (isset($matches[3]) && $matches[3] != '')
            $item['type'] = htmlspecialchars($matches[3]);

    }

    array_push($issueList, $item);
}
echo json_encode(["data" => $issueList]);