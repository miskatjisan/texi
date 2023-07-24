<?php

namespace App\Http\Controllers;

use App\Models\Airfixprice;
use App\Models\Bymilage;
use App\Models\Pricing;
use App\Models\Areacover;
use Illuminate\Http\Request;

class PricingController extends Controller
{

//by milage

public function bymilage(){
  $bymilages = Bymilage::latest()->paginate(5);
  return view('partner.pricings.bymilages.index',compact('bymilages'))->with('i', (request()->input('page', 1) - 1) * 5);
}
// public function createmilage()
// {
//     return view('partner.pricings.bymilages.index');
// }

public function milagestore(Request $request)
{
  $request->validate([
   
  ]);

  $bymilagepricing = new Bymilage();

  $bymilagepricing->m_from = $request->m_from;
  $bymilagepricing->m_miles = $request->m_fare;
  $bymilagepricing->m_fare = $request->m_fare;
  $bymilagepricing->save();

if($bymilagepricing){
  return redirect()->route('bymilages.index')->with('success','By Milage Price Added successfully.');
}
}

public function milageedit( Bymilage $bymilage)
{
  
  return view('partner.pricings.bymilages.edit',compact('bymilage'));
}



public function milageupdate(Request $request, $id)
{
  $request->validate([
   
  ]);
  $id= Bymilage::where('id', $id);

  $bymilagepricing = new Bymilage();

  $bymilagepricing->m_from = $request->m_from;
  $bymilagepricing->m_miles = $request->m_fare;
  $bymilagepricing->m_fare = $request->m_fare;
  $bymilagepricing->save();

if($bymilagepricing){
  return redirect()->route('bymilages.index')->with('success','By Milage Price updated successfully.');
}
}

public function milagedelete(Bymilage $bymilage)
{
  $bymilage->delete();

  return redirect()->route('bymilages.index')->with('success','By Milage Price Deleted successfully');
}






  // Airport fixed price

    public function airfixprice(){
        $airfixprices = Airfixprice::latest()->paginate(5);
        return view('partner.pricings.airfixprices.index',compact('airfixprices'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // public function createmilage()
    // {
    //     return view('partner.pricings.bymilages.index');
    // }

    public function airfixpricestore(Request $request)
    {
        $request->validate([
         
        ]);

        $airfixprice = new Airfixprice();

        $airfixprice->journey_type = $request->journey_type;
        $airfixprice->a_from = $request->a_from;
        $airfixprice->a_to = $request->a_to;
        $airfixprice->a_fare = $request->a_fare;
        $airfixprice->pick_drop_charge = $request->pick_drop_charge;
        $airfixprice->save();
  
      if($airfixprice){
        return redirect()->route('airfixprices.index')->with('success','Air Fixed Price Added successfully.');
      }
    }

      public function airfixpriceedit( Airfixprice $airfixprice)
    {
        
        return view('partner.pricings.airfixprices.edit',compact('airfixprice'));
    }



    public function airfixpriceupdate(Request $request, $id)
    {
        $request->validate([
         
        ]);
        $id= Airfixprice::where('id', $id);

        $airfixprice = new Airfixprice();

        $airfixprice->journey_type = $request->journey_type;
        $airfixprice->a_from = $request->a_from;
        $airfixprice->a_to = $request->a_to;
        $airfixprice->a_fare = $request->a_fare;
        $airfixprice->pick_drop_charge = $request->pick_drop_charge;
        $airfixprice->save();
  
      if($airfixprice){
        return redirect()->route('airfixprices.index')->with('success','Air Fixed Price updated successfully.');
      }
    }

    public function airfixpricedelete(Airfixprice $airfixprice)
    {
        $airfixprice->delete();
  
        return redirect()->route('airfixprices.index')->with('success','Air Fixed Price Deleted successfully');
    }

    

    //Set Congestion Charges

   
    public function congcharge(){
      $areacovers = Areacover::all();
      $congcharges = Pricing::latest()->paginate(5);
      return view('partner.pricings.congcharges.index',compact('congcharges','areacovers'))->with('i', (request()->input('page', 1) - 1) * 5);
  }
  // public function createmilage()
  // {
  //     return view('partner.pricings.bymilages.index');
  // }

  public function congchargestore(Request $request)
  {
      $request->validate([
       
      ]);

      $congcharge = new Pricing();

      $congcharge->congestion_charge = $request->congestion_charge;
      $congcharge->area_postcode = $request->area_postcode;
     
      $congcharge->save();

    if($congcharge){
      return redirect()->route('congcharges.index')->with('success','Congestion Charges Added successfully.');
    }
  }

    public function congchargeedit( Pricing $congcharge)
  {
      
      return view('partner.pricings.congcharges.edit',compact('congcharge'));
  }



  public function congchargesupdate(Request $request, $id)
  {
      $request->validate([
       
      ]);
      $id= Pricing::where('id', $id);

      $congcharge = new Pricing();

      $congcharge->congestion_charge = $request->congestion_charge;
      $congcharge->area_postcode = $request->area_postcode;
     
      $congcharge->save();

    if($congcharge){
      return redirect()->route('congcharges.index')->with('success','Congestion Charges updated successfully.');
    }
  }

  public function congchargedelete(Pricing $congcharge)
  {
      $congcharge->delete();

      return redirect()->route('congcharges.index')->with('success','Congestion Charges Deleted successfully');
  }


   
  
}
