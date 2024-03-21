<?php

namespace App\Http\Controllers;
use Cloudinary\Api\ApiUtils;

use Cloudinary\Configuration\CloudConfig;

use Illuminate\Http\Request;

class Cloudinary extends Controller
{
    public function getsignature(){
        $cloudinaryConfig = new CloudConfig([
            "cloud_name" => env('CLOUDINARY_CLOUD_NAME'),
            "api_key" => env('CLOUDINARY_API_KEY'),
            "api_secret" => env('CLOUDINARY_API_SECRET')
        ]);
        $timestamp=time();
        $params =
            [
                "timestamp" => time(),
                "folder" => 'salles'
            ];
        $data = ['signature' => ApiUtils::signParameters($params, $cloudinaryConfig->apiSecret), 'timestamp' => $timestamp];
        return $data;
    }
}
?>
