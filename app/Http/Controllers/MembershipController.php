<?php

namespace App\Http\Controllers;

use App\Membership;
use App\TransactionHistory;
use Illuminate\Http\Request;
Use Alert;
use Illuminate\Support\Facades\Auth;
use KingFlamez\Rave\Facades\Rave;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // u now get all the records from the db
        $membership = Membership::all();

        return $membership;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $membership = new Membership;
        $membership->momo = $request->input('momo');
        $membership->package_name = $request->input('package_name');
        $membership->network = $request->input('network');
        $membership->user_id = $request->input('user_id');
        $membership->save();
//        toast('Submitted','success');

//        dd($membership);

        return redirect()->to('/complete-membership');

//        $membership = Membership::create(Request['network','']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        // this will use the route model binding
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        //
    }


    public function initialize() {

        Rave::initialize(route('callback'));
    }


    public function callback() {

        $data = Rave::verifyTransaction(request()->txref);

        if($data->status== 'success'){

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
}
