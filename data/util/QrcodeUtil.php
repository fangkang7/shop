<?php

namespace data\util;

use Endroid\QrCode\QrCode;

class QrcodeUtil

{
    public function getQRcode($url,$path)
    {
        $qrCode = new QrCode($url);
        $qrCode->writeFile($path);
        if(!file_exists($path)){
            return false;
        }else{
            return true;
        }
    }
}
