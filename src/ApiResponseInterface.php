<?php

namespace ApiResponse;


interface ApiResponseInterface
{

    public static function gerar($data, $message = 'enviando dados', $statusCode = 200, $success = true);
}