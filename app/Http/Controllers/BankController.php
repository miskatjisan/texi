<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Partner;
use Illuminate\Http\Request;

class BankController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::latest()->paginate(5);
        return view('partner.banks.index',compact('banks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.banks.create');
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
  
        Bank::create($request->all());
   
        return redirect()->route('banks.index')->with('success','Bank created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        return view('partner.banks.show',compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        return view('partner.banks.edit',compact('bank'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        $request->validate([
         
        ]);
  
        $bank->update($request->all());
  
        return redirect()->route('banks.index')->with('success','Bank updated successfully');
    }

//edit billing address

    public function editbillingaddress($id)
    {
        return view('partner.banks.editbillingeddress',compact('id'));
    }

    public function updatebillingaddress(Request $request, Partner $bill)
    {
        $request->validate([
        ]);
  
        $bill->update($request->all());
  
        return redirect()->back()->with('success','Billing Address updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();
  
        return redirect()->route('banks.index')->with('success','Bank deleted successfully');
    }
}
