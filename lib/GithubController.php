<?php
require __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

session_start();

class GithubController {

    public $clientId;

    private $client;
    private $clientSecret;
    private $owner;
    private $repo;

    public function __construct()
    {
        $dotEnv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotEnv->load();
        $this->owner = $_ENV['owner'];
        $this->repo = $_ENV['repo'];
        $this->clientId = $_ENV['clientId'];
        $this->clientSecret = $_ENV['clientSecret'];

        $this->client = new Client();
    }

    public function getToken($code)
    {
        try
        {
            $res = $this->client->request('POST', 'https://github.com/login/oauth/access_token', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/vnd.github.v3+json'
                ],
                'json' => [
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'code' => $code
                ]]);
            $token = json_decode($res->getBody());
            if(isset($token->access_token))
                return $token->access_token;
            return false;
        } catch (ClientException $e)
        {
            return false;
        }
    }

    public function getIssues()
    {
        try
        {
            $res = $this->client->request('GET', "https://api.github.com/repos/{$this->owner}/{$this->repo}/issues?state=all", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION["token"],
                    'Accept' => 'application/vnd.github.v3+json'
                ],
            ]);
            return json_decode($res->getBody());

        } catch (ClientException $e)
        {
            echo $e->getResponse()->getStatusCode().'<br>';
            echo $e->getResponse()->getBody().'<br>';

            return [];
        }

    }

    public function createIssue($form)
    {
        try
        {
            $client = new Client();
            $res = $client->request('POST', "https://api.github.com/repos/{$this->owner}/{$this->repo}/issues", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION["token"],
                    'Accept' => 'application/vnd.github.v3+json'
                ],
                'json' => [
                    'title' => $form["title"],
                    'body' => $form["description"],
                    'labels' => [
                        $form["priority"],
                        $form["client"],
                        $form["type"]
                    ]
                ]]);

            return ["status" => $res->getStatusCode(), 'message' => 'Issues was created successfully'];
        } catch (ClientException $e)
        {
            return ["status" => 400, 'message' => 'There was a problem, please try again later'];
        }
    }

    public function getLabels()
    {
        $client = new Client();
        $res = $client->request('GET', "https://api.github.com/repos/{$this->owner}/{$this->repo}/labels", [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION["token"],
                'Accept' => 'application/vnd.github.v3+json'
            ],
        ]);

        return json_decode($res->getBody());
    }
}