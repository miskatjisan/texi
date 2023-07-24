<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\Vehicle;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class BookingController extends Controller
{

    public function book(){
        return view('client.booking');
        
    }

    public function allbooking(){
        $vehicles = Vehicle::all();
        return view('client.allbooking',compact('vehicles'));
        
    }

    public function searchforbook(Request $request){

        $vehicles = Vehicle:: where([
            ['type','!=',NULL],
            [function ($query) use ($request){
                if($term1 = $request->term1){
                    $query-> orWhere('type', 'Like', '%' . $term1 . '%')
                    ->orWhere('area', 'Like', '%' . $term1 . '%')
                    ->orWhere('class', 'Like', '%' . $term1 . '%')
                    ->orWhere('passenger', 'Like', '%' . $term1 . '%')
                    ->orWhere('cabin', 'Like', '%' . $term1 . '%')
                    ->get();
                }
            }]
        ])->orderBy("id","desc")->paginate(10);



        return view('client.allbooking',compact('vehicles')); 
    }

    public function makeorder(Vehicle $vehicle){
        $data =Auth::user();
        return view('client.makeorder',compact('data','vehicle'));
    }

    public function orderstore(Request $request){

        $book = new Book();
        $book->pay_type = $request->pay_type;
        $book->price = $request->price;
        $book->card_num = $request->card_num;
        $book->cvc_mm_yy = $request->cvc_mm_yy;
        $book->from = $request->from;
        $book->to = $request->to;
        $book->date = $request->date;
        $book->time = $request->time;
        $book->flight_num = $request->flight_num;
        $book->area = $request->area;
        $book->class = $request->class;
        $book->type = $request->type;
        $book->passenger = $request->passenger;
        $book->cabin = $request->cabin;
        $book->checkin = $request->checkin;
        $book->client_name = $request->client_name;
        $book->client_email = $request->client_email;
        $book->client_phone = $request->client_phone;
        $book->client_countrycode = $request->client_countrycode;
       
        $book->save();
  
      if($book){
        return redirect()->route('make.payment')->with('success','Give The Bank Details And Complete Your Payment successfully.');
      }
    }

    public function makePayment(){

        return view('client.makepayment');

    }




    public function index()
    {
        $books = Book::latest()->paginate(5);
        return view('partner.booking.index',compact('books'))->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function destroy(Book $book)
    {
        $book->delete();
  
        return redirect()->route('books.index')->with('success','Booking deleted successfully');
    }



  
}
