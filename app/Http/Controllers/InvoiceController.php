<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function fetchData(Request $request){
        if($request->has('term')){
            return Customer::where('name','like','%'.$request->input('term').'%')->get();
        }
    }

    public function create(){
        return view('admin.invoices.create');
    }
}
