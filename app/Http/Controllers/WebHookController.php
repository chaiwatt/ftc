<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class WebHookController extends Controller
{
    public function webhook(Request $request){
        $data = '{
            "object": "event",
            "id": "evnt_test_56vp5pfwjf1fqjn4ryy",
            "livemode": false,
            "location": "/events/evnt_test_56vp5pfwjf1fqjn4ryy",
            "key": "charge.create",
            "created": "2017-02-03T13:52:54Z",
            "data": {
              "object": "charge",
              "id": "chrg_test_56vp5pdrw28e2sgyr51",
              "livemode": false,
              "location": "/charges/chrg_test_56vp5pdrw28e2sgyr51",
              "amount": 100000,
              "currency": "jpy",
              "description": "Charge for order 3947",
              "status": "successful",
              "capture": true,
              "authorized": true,
              "reversed": false,
              "paid": true,
              "transaction": "trxn_test_56vp5pfhp4tv1o8xp85",
              "source_of_fund": "card",
              "refunded": 0,
              "refunds": {
                "object": "list",
                "from": "1970-01-01T00:00:00+00:00",
                "to": "2017-02-03T13:52:54+00:00",
                "offset": 0,
                "limit": 20,
                "total": 0,
                "order": null,
                "location": "/charges/chrg_test_56vp5pdrw28e2sgyr51/refunds",
                "data": [
          
                ]
              },
              "return_uri": "http://www.example.com/orders/3947/complete",
              "offsite": null,
              "reference": "paym_test_56vp5pe0wpv1c02a2vg",
              "authorize_uri": "https://api.omise.co/payments/paym_test_56vp5pe0wpv1c02a2vg/authorize",
              "failure_code": null,
              "failure_message": null,
              "card": {
                "object": "card",
                "id": "card_test_56vp5nkjti9mi10tmlx",
                "livemode": false,
                "country": "us",
                "city": "Bangkok",
                "postal_code": "10320",
                "financing": "",
                "bank": "",
                "last_digits": "4242",
                "brand": "Visa",
                "expiration_month": 2,
                "expiration_year": 2019,
                "fingerprint": "uqEgwbY6J9JcS3z/H1/eDzZmxXacMWo2gT09m+kj//0=",
                "name": "JOHN DOE",
                "security_code_check": true,
                "created": "2017-02-03T13:52:45Z"
              },
              "customer": null,
              "ip": null,
              "dispute": null,
              "created": "2017-02-03T13:52:53Z"
            }
          }';

        // $payload = json_decode($request->getContent());
        
        // $payload = $request->all();// //json_decode($request->getContent(),JSON_PRETTY_PRINT);
        $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT);
        $aa = $payload['id'];

        // $result = [
        //     "id" => $payload['id'],
        //     "object" => $payload['data']['object'],
        //     "object_id" => $payload['data']['id'],
        //     "title" => $payload['data']['status'],
        //     'amount' => $payload['data']['amount'],
        //     'transaction' => $payload['data']['transaction'],
        //     'source_of_fund' => $payload['data']['source_of_fund'],
        //     'paid' => $payload['data']['paid'],
        //     'created' => $payload['data']['created'],  
        // ];
        
        // Storage::disk('public')->put('hook/'.trim($payload['id']).'.txt', json_encode($result,JSON_PRETTY_PRINT));
        // Storage::disk('public')->put('hook/hello1.txt', $request->getContent());
        Storage::disk('public')->put('hook/hello2.txt', $aa);

    }
}
