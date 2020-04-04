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
    
    public static function gerarSlack($text, $response_type = 'in_channel')
    {

        return [
            'response_type' => $response_type,
            'text' => $text,
        ];
    }

}
