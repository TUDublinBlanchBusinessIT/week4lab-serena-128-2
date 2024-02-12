<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use \App\Models\Customer as Customer; 

class CustomerController extends Controller 
{ 
    public function new() 
    { 
        return view('customers.new'); 
    } 

    public function create(Request $request) 
    { 
		$customer = new Customer(); //creates a new instance of the customer object
		$customer->setFirstname($request->firstname);//sets the attributes
		$customer->setSurname($request->surname);//sets the attributes
		$customer->save();//persists the Customer object to the database
    } 
	public function edit($id)
    {
         $customer = Customer::find($id);
         return view('customers.edit')->with('customer', $customer);
    }
	
	public function update(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->setFirstname($request->firstname);
        $customer->setSurname($request->surname);
        $customer->save();
    }
} 
?> 