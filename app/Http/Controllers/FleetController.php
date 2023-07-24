<?php

namespace App\Http\Controllers;

use App\Models\Areacover;
use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class FleetController extends Controller
{

    public function drivers(){
        $drivers = Driver::latest()->paginate(5);
        return view('partner.fleet.drivers.index',compact('drivers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function driverstore(Request $request)
    {
        $request->validate([
         
        ]);

        $driver = new Driver();

        $driver->name = $request->name;
        $driver->license_no = $request->license_no;
        $driver->vehicle_make = $request->vehicle_make;
        $driver->reg_no = $request->reg_no;
        $driver->vehicle_model = $request->vehicle_model;
        $driver->pco_num = $request->pco_num;
        $driver->vehicle_class = $request->vehicle_class;
        $driver->vehicle_type = $request->vehicle_type;
        $driver->save();
  
      if($driver){
        return redirect()->route('drivers.index')->with('success','Driver Information Added successfully.');
      }
    }

      public function driveredit( Driver $driver)
    {
        
        return view('partner.fleet.drivers.edit',compact('driver'));
    }



    public function driverupdate(Request $request, $id)
    {
        $request->validate([
         
        ]);
        $id= Driver::where('id', $id);

        $driver = new Driver();

        $driver->name = $request->name;
        $driver->license_no = $request->license_no;
        $driver->vehicle_make = $request->vehicle_make;
        $driver->reg_no = $request->reg_no;
        $driver->vehicle_model = $request->vehicle_model;
        $driver->pco_num = $request->pco_num;
        $driver->vehicle_class = $request->vehicle_class;
        $driver->vehicle_type = $request->vehicle_type;
        $driver->save();

      if($driver){
        return redirect()->route('drivers.index')->with('success','Driver information updated successfully.');
      }
    }

    public function driverdelete(Driver $driver)
    {
        $driver->delete();
  
        return redirect()->route('drivers.index')->with('success','Driver information Deleted successfully');
    }

    

    //Set Congestion Charges

   
    public function vehicles(){
      $areacovarages = Areacover::all();
      $vehicles = Vehicle::latest()->paginate(5);
      return view('partner.fleet.vehicles.index',compact('vehicles','areacovarages'))->with('i', (request()->input('page', 1) - 1) * 5);
  }
  // public function createmilage()
  // {
  //     return view('partner.pricings.bymilages.index');
  // }

  public function vehiclestore(Request $request)
  {
      $request->validate([
       
      ]);

      $vehicle = new Vehicle();
      $vehicle->area = $request->area;
      $vehicle->name = $request->name;
      $vehicle->type = $request->type;
      $vehicle->class = $request->class;
      $vehicle->passenger = $request->passenger;
      $vehicle->no_vehicle = $request->no_vehicle;
      $vehicle->checkin = $request->checkin;
      $vehicle->cabin = $request->cabin;
      $vehicle->fare = $request->fare;
     
      $vehicle->save();

    if($vehicle){
      return redirect()->route('vehicles.index')->with('success','Vehicle Added successfully.');
    }
  }

    public function vehicleedit( Vehicle $vehicle)
  {
    $areacovarages = Areacover::all();
      return view('partner.fleet.vehicles.edit',compact('vehicle','areacovarages'));
  }



  public function vehicleupdate(Request $request, $id)
  {
      $request->validate([
       
      ]);

      $id= Vehicle::where('id', $id);

      $vehicle = new Vehicle();

      $vehicle->name = $request->name;
      $vehicle->area = $request->area;
      $vehicle->type = $request->type;
      $vehicle->class = $request->class;
      $vehicle->passenger = $request->passenger;
      $vehicle->no_vehicle = $request->no_vehicle;
      $vehicle->checkin = $request->checkin;
      $vehicle->cabin = $request->cabin;
      $vehicle->fare = $request->fare;
     
      $vehicle->save();

    if($vehicle){
      return redirect()->route('vehicles.index')->with('success','Vehicle updated successfully.');
    }
  }

  public function vehicledelete(Vehicle $vehicle)
  {
      $vehicle->delete();

      return redirect()->route('vehicles.index')->with('success','Vehicle Deleted successfully');
  }

}
