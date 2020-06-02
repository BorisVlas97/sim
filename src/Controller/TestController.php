<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Entity\Test;

class TestController
{
    public function index()
    {
        $test = new Test;
        $path = getcwd() . '\data\orders.json';
        
        $response = $test->readJson($path);
        $jsonContent = json_encode($response);
        return new Response($jsonContent, 200, ["Content-Type" => "application/json"]);
    }
}