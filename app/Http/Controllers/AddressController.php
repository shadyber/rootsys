<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //

    public function editAddress(){
        $address=Address::myAddress();
        return view('address.update')->with(['address'=>$address]);
    }
    public function update(Request  $request){

    }


}
