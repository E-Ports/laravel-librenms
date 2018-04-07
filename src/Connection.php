<?php

namespace Axsor\LaravelLibreNMS;


use Axsor\LaravelLibreNMS\Exceptions\LibreNMSConfigNotFound;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

class Connection
{
    /**
     * Stores LibreNMS url server
     *
     * @var \Illuminate\Config\Repository|mixed
     */
    private $url;

    /**
     * Stores LibreNMS api key server
     *
     * @var \Illuminate\Config\Repository|mixed
     */
    private $key;

    /**
     * Client to send HTTP requests
     *
     * @var \GuzzleHttp\Client
     */
    private $client;



    public function __construct($connection = 'default')
    {
        $connectionConfigPath = "librenms.connections.{$connection}.";

        if (!Config::has($connectionConfigPath."url") || !Config::has($connectionConfigPath."key"))
        {
            throw new LibreNMSConfigNotFound;
        } else
        {
            $this->url = config("{$connectionConfigPath}url");

            $this->key = config("{$connectionConfigPath}key");

            $this->client = new Client;
        }
    }



    public function get($uri)
    {
        return $this->request('get', $uri);
    }

    public function head($uri)
    {
        return $this->request('head', $uri);
    }

    public function post($uri, $data)
    {
        return $this->request('post', $uri, $data);
    }

    public function put($uri, $data)
    {
        return $this->request('put', $uri, $data);
    }

    public function delete($uri)
    {
        return $this->request('delete', $uri);
    }

    public function patch($uri, $data)
    {
        return $this->request('patch', $uri, $data);
    }


    /**
     * Send request to LibreNMS server
     *
     * @param $method ['get', 'head', 'post', 'put', 'delete', 'patch']
     * @param $uri String path added to base url
     * @param array $payload data to post/put/patch
     * @return mixed
     */
    private function request($method, $uri, $payload = [])
    {
        return json_decode($this->client->$method($this->url . '/' . $uri, [
            'headers' => [
                'X-Auth-Token' => $this->key
            ],
            'json' => $payload
        ])->getBody()->getContents(), true);
    }
}