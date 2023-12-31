<?php

namespace src\helpers;

class JsonResponse
{
    private static function setJsonHeader(): void
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public static function create(array $data): string
    {
        self::setJsonHeader();
        if (isset($data['status'])) {
            http_response_code((int)$data['status']);
        }
        return die(json_encode($data));
    }
}