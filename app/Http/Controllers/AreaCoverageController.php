<?php

namespace App\Http\Controllers;

use App\Models\Areacover;
use Illuminate\Http\Request;

class AreaCoverageController extends Controller
{
    public function index()
    {
        $areacovers = Areacover::latest()->paginate(5);
        return view('partner.areacovers.index',compact('areacovers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.areacovers.create');
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
  
        Areacover::create($request->all());
   
        return redirect()->route('areacovers.index')->with('success','Area coverage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Areacover $areacover)
    {
        return view('partner.areacovers.show',compact('areacover'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Areacover $areacover)
    {
        return view('partner.areacovers.edit',compact('areacover'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Areacover $areacover)
    {
        $request->validate([
         
        ]);
  
        $areacover->update($request->all());
  
        return redirect()->route('areacovers.index')->with('success','Areacoverage updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Areacover $areacover)
    {
        $areacover->delete();
  
        return redirect()->route('areacovers.index')->with('success','Areacoverage deleted successfully');
    }
}
