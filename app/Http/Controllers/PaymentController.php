<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class PaymentController extends Controller
{
    public function createqr(Request $request)
    {
        $amount = $request->amount;
        $token = '0D/3uMcC1QWZrqO+0OTRzTRqa5ZidIIrFl3l/Boo+3fR25DbS3FOW/NSzn+SfvXrCLEFiyDeaOB2fv/DzXdXDzC/jDFNSfI/76DPRO3ROIRq+uf4+ly9iFiC3Vo/8mIrGpBZJbg/l3HQzsk4yG/0znMfLGMB2Zpu2ppcm7CP42LJOZSa';
        $tokenKey = rawurlencode($token);      
        $referenceNo = uniqid();
        $backgroundUrl = URL::to('redirect/');
        $amount = 0.01;
        print($backgroundUrl);
        $field = 'token='.$tokenKey.'&referenceNo='.$referenceNo.'&backgroundUrl='.$backgroundUrl.'&amount='.$amount.'';

        $url = "https://api.gbprimepay.com/v3/qrcode";
  
        // curl api grcode
        $request_headers = array(
            "Cache-Control: no-cache",
          );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $field);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        $output = curl_exec($ch);
        
        curl_close($ch);
        $body = 'data:image/png;base64,' . base64_encode($output) . '';
        return view('qr',[
            'res' => $body
        ]);
    }
    public function redirect(Request $request)
    {
        dd($request);
        return view('redirect');
    }
}
