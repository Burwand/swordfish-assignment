<?php
require __DIR__ . '/../vendor/autoload.php';
$git = new GithubController();
$labels = $git->getLabels();

$clients = $types = $priorities = [];
foreach ($labels as $label)
{
    preg_match_all('/P:(.*)|C:(.*)|T:(.*)/m', $label->name, $matches, PREG_SET_ORDER, 0);
    if(!isset($matches[0]))
        continue;
    $matches = $matches[0];

    if (isset($matches[1]) && $matches[1] != '')
        array_push($priorities,['value' => $matches[0], 'text' => $matches[1]]);
    if (isset($matches[2]) && $matches[2] != '')
        array_push($clients,['value' => $matches[0], 'text' => $matches[2]]);
    if (isset($matches[3]) && $matches[3] != '')
        array_push($types,['value' => $matches[0], 'text' => $matches[3]]);
}
echo json_encode(['clients' => $clients,'types'=>$types,'priorities'=>$priorities]);