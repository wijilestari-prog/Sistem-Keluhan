<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FormModel;
use App\Models\KeluhanModel;

class Whatsapp extends BaseController
{
    public function sendMessage($no, $text)
    {
        $url = 'https://bot-waha.ylb4t6.easypanel.host/api/sendText';

        $data = [
            'chatId' => $no.'@c.us',
            'text' => $text,
            'session' => 'Bis'
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return response()->json([
                'status' => 'error',
                'message' => curl_error($ch)
            ], 500);
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    }

}