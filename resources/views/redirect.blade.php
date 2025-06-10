@extends('layouts.master')
@section('content')

<form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
    <input type="hidden" name="amount" value="{{ $total }}">
    <input type="hidden" name="tax_amount" value="0">
    <input type="hidden" name="total_amount" value="{{ $total }}">
    <input type="hidden" name="transaction_uuid" value="{{ $transaction_uuid }}">
    <input type="hidden" name="product_code" value="EPAYTEST">
    <input type="hidden" name="product_service_charge" value="0">
    <input type="hidden" name="product_delivery_charge" value="0">
    <input type="hidden" name="success_url" value="https://developer.esewa.com.np/success">
    <input type="hidden" name="failure_url" value="https://developer.esewa.com.np/failure">
    <input type="hidden" name="signed_field_names" value="total_amount,transaction_uuid,product_code">
    <input type="hidden" name="signature" value="{{ $signature }}">



    <div class="mt-4 text-right">
        <a href="{{ '/' }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Back to Orders
        </a>
    </div>

    <div class="container mx-auto px-4 py-8 ">
        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
            <h2 class="text-4xl font-bold mb-6 text-center text-gray-800">Payment Details</h2>
            <div class="mb-4">
                <p class="text-stone-700 font-semibold">Total Amount: Rs. {{ $total }}</p>
            </div>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center">
                Pay with
                <img src="https://esewa.com.np/common/images/esewa_logo.png" alt="eSewa" class="h-6 ml-4 mr-2">
            </button>
        </div>
    </div>
</form>
@endsection
