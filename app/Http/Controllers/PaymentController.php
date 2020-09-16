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


        if($data->status== 'success'){
//        get data and save to transaction history
            $hist = new TransactionHistory();
            $hist->user_id = Auth::user()->id;
            $hist->note_id = $data->note_id;
            $hist->status = $data->status;
            $hist->amount = $data->amount;
            $hist->amount = $data->amount;
            $hist->currency = $data->currency;
            $hist->network = $data->network;
            $hist->device_fingerprint = $data->device_fingerprint;
            $hist->tx_ref = $data->tx_ref;

            $hist->save();
            return redirect()->to('/order-complete')->with('success','Payment completed successfully!');


        }else{
//       return invalid payment

            return back()->with('error','Sorry, an error occurred, Please try again');
        }


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

}





}
