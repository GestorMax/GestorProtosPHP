<?php

namespace GrpcUtils;

class Response {

    public static function succeded($response) {
        return !Response::failed($response);
    }

    public static function failed($response) {
        if(!isset($response[0])) {
            return true;
        }

        if(!isset($response[0]->result)){
            return false;
        }
        
        return !empty($response->result->error);
    }

    public static function error($response) {
        $data = $response[0];
        if(!isset($data)) {
            return $response[1];
        }
        
        if(method_exists($data, 'getError')){
            return $data->getError();
        }
        
        return "";
    }
}