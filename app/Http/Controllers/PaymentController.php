<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::latest()->paginate(5);
        return view('partner.payments.index',compact('payments'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
         
        ]);
  
        Payment::create($request->all());
   
        return redirect()->route('payments.index')->with('success','Pay to card Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view('partner.payments.show',compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('partner.payments.edit',compact('payment'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
         
        ]);
  
        $payment->update($request->all());
  
        return redirect()->route('payments.index')->with('success','Pay to card updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
  
        return redirect()->route('payments.index')->with('success','Pay to card deleted successfully');
    }
}
