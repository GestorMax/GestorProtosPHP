<?php

namespace GrpcUtils;

class Response {

    public static function succeded($response) {
        if(!isset($response->result)){
            return true;
        }
        return empty($response->result->error);
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
}