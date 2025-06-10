<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsewaController extends Controller
{
    public function initiatePayment(Request $request)
    {
        $total = $request->input('total');
        $transaction_uuid = time();
        $product_code = 'EPAYTEST';
        $secret_key = '8gBm/:&EnhH.1/q';

        $message = "total_amount=$total,transaction_uuid=$transaction_uuid,product_code=$product_code";
        $sign = hash_hmac('sha256', $message, $secret_key, true);
        $signature = base64_encode($sign);

        return view('redirect', compact('total', 'transaction_uuid', 'product_code', 'signature'));
    }
}
