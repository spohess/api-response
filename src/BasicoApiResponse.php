<?php

namespace ApiResponse;


final class BasicoApiResponse extends AbstractApiResponse
{

    public static function gerar($data, $message = 'Requisição processada', $statusCode = 200, $success = true)
    {

        return [
            'success' => $success,
            'statusCode' => $statusCode,
            'message' => $message,
            'data' => $data,
        ];
    }

}