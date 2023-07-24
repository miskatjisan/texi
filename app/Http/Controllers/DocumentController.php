<?php

namespace App\Http\Controllers;

use App\Models\License;
use App\Models\Insurance;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $licenses = License::latest()->paginate(5);
        return view('partner.documents.licenses.index',compact('licenses'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('partner.documents.licenses.create');
    // }

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
  
        License::create($request->all());
   
        return redirect()->route('licenses.index')->with('success','Operator license created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    // public function show(Bank $bank)
    // {
    //     return view('partner.banks.show',compact('bank'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(License $license)
    {
        return view('partner.documents.licenses.edit',compact('license'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, License $license)
    {
        $request->validate([
         
        ]);
  
        $license->update($request->all());
  
        return redirect()->route('licenses.index')->with('success','Operator license updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(License $license)
    {
        $license->delete();
  
        return redirect()->route('licenses.index')->with('success','Operator license deleted successfully');
    }


    // Insurance

    public function insurance(){
        $insurances = Insurance::latest()->paginate(5);
        return view('partner.documents.insurances.index',compact('insurances'))->with('i', (request()->input('page', 1) - 1) * 5);
      }
      // public function createmilage()
      // {
      //     return view('partner.pricings.bymilages.index');
      // }
      
      public function insurancestore(Request $request)
      {
        $request->validate([
         
        ]);
      
        $insurance = new Insurance();
      
        $insurance->ins_number = $request->ins_number;
        $insurance->ins_expiry_date = $request->ins_expiry_date;
        $insurance->save();
      
      if($insurance){
        return redirect()->route('insurances.index')->with('success','Insurance Added successfully.');
      }
      }
      
      public function insuranceedit( Insurance $insurance)
      {
        
        return view('partner.documents.insurances.edit',compact('insurance'));
      }
      
      
      
      public function insuranceupdate(Request $request, $id)
      {
        $request->validate([
         
        ]);
        $id= Insurance::where('id', $id);
      
        $insurance = new Insurance();
      
        $insurance->ins_number = $request->ins_number;
        $insurance->ins_expiry_date = $request->ins_expiry_date;
        $insurance->save();
      
      if($insurance){
        return redirect()->route('insurances.index')->with('success','Insurance updated successfully.');
      }
      }
      
      public function insurancedelete(Insurance $insurance)
      {
        $insurance->delete();
      
        return redirect()->route('insurances.index')->with('success','Insurance Deleted successfully');
      }
}
