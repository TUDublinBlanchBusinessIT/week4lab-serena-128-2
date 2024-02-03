<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model as Model; 

class customer extends Model 
{ 
    public $table = "customer"; 
    public $timestamps = false;
    
    public function setFirstname($fn) 
    { 
        $this->attributes['firstname']=$fn;
    } 

    public function setSurname($sn) 
    { 
        $this->attributes['surname']=$sn; 
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