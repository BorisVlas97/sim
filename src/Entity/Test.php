<?php

namespace App\Entity;

class Test{

    private $response = array();

    public function set_response($value) {
        $this->response = $value;
    }

    public function get_response(){
        return $this->response;
    }

    public function readJson($path){
        $content = file_get_contents($path);
        $contentDecode = json_decode($content, true);

        $this->set_response($contentDecode);

        return $this->get_response();
    }
}