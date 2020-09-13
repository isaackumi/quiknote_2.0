<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\TransactionHistory;
use App\User;

use Illuminate\Support\Facades\Auth;
use KingFlamez\Rave\Facades\Rave;



class PaymentController extends Controller
{

    public function pay(){
        return view('pay');
    }

    public function initialize() {

        Rave::initialize(route('callback'));
    }


    public function callback() {
        // This verifies the transaction and takes the parameter of the transaction reference
        $data = Rave::verifyTransaction(request()->txref);

        dd($data);


//        $chargeResponsecode = $data->data->chargecode;
//        $chargeAmount = $data->data->amount;
//        $chargeCurrency = $data->data->currency;

//
//        $amount = 4500;
//        $currency = "GHS";

//        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
////            return redirect('/success');
//            return redirect('/success');
//
//        } else {
//            return redirect('/failed');
//            return redirect('/failed');
//        }
        // dd($data->data);
    }

public function createPaymentPlan()
{
    $data = Rave::createPaymentPlan();
    dd($data);
}





}
