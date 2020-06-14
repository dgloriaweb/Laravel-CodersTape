<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::where('isActive',1)->get();
        $inactiveCustomers = Customer::where('isActive',0)->get();
        $customers = Customer::all();
        return view('internals.customers', [
            'customers' => $customers,
            'activeCustomers' => $activeCustomers,
            'inactiveCustomers' => $inactiveCustomers,
        ]);
    }

    function store()
    {
        //validation
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->isActive = request('isActive');
        $customer->save();
        return back();
    }
}
