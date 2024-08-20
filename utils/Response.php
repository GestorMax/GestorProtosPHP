<?php

namespace GrpcUtils;

use Exception;
use Google\Protobuf\Internal\Message;

class Response
{

    public static function succeded($response)
    {
        return !Response::failed($response);
    }

    public static function failed($response)
    {
        if (is_array($response)) {
            return self::resultFailed($response[0]);
        }

        return self::resultFailed($response);
    }

    private static function resultFailed($response)
    {

        if (method_exists($response, 'getResult')) {
            return isset($response->result);
        }

        return isset($response);
    }

    public static function error($response)
    {

        if (is_array($response)) {
            $data = $response[0];
            if (!isset($data)) {
                return $response[1];
            }
        } else {
            $data = $response;    
        }

        if (method_exists($data, 'getResult')) {
            return $data->getResult()->getError();
        }

        if (method_exists($data, 'getError')) {
            return $data->getError();
        }

        return "";
    }
}
