<?php
require __DIR__ . '/../vendor/autoload.php';
$git = new GithubController();
$issues = $git->getIssues();

$issueList = [];

foreach ($issues as $issue)
{
    $item = [];
    $item['title'] = $issue->title;
    $item['state'] = $issue->state;
    $item['body'] = $issue->body;
    $item['user'] = $issue->user->login;

    foreach ($issue->labels as $label)
    {
        preg_match_all('/P:(.*)|C:(.*)|T:(.*)/m', $label->name, $matches, PREG_SET_ORDER, 0);
        if(!isset($matches[0]))
            continue;
        $matches = $matches[0];

        if (isset($matches[1]) && $matches[1] != '')
            $item['priority'] = $matches[1];
        if (isset($matches[2]) && $matches[2] != '')
            $item['client'] = $matches[2];
        if (isset($matches[3]) && $matches[3] != '')
            $item['type'] = $matches[3];

    }

    array_push($issueList, $item);
}
echo json_encode(["data" => $issueList]);

function dd($data){
    echo '<pre>' . var_export($data, true) . '</pre>';
}