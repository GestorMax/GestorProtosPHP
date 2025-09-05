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

        if (!is_null($response) && method_exists($response, 'getResult')) {
            return isset($response->result);
        }

        return is_null($response);
    }

    public static function error($response)
    {

        if (is_array($response)) {
            \Log::info('response es un array!', $response);
            $data = $response[0];
            if (is_null($data)) {
                return $response[1]->details;
            }
        } else {
            \Log::info('response no es un array!');
            $data = $response;    
        }

        if (!is_null($data) && method_exists($data, 'getResult')) {
            \Log::info('response no es nulo y tiene metodo getResult!');
            return $data->getResult()->getError();
        }

        if (!is_null($data) && method_exists($data, 'getError')) {
            \Log::info('response no es nulo y tiene metodo getError!');
            return $data->getError();
        }

        \Log::info('retorno string vacío!');
        return "";
    }
}
