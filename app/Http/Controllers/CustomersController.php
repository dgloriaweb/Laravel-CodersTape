<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::Active()->get();
        $inactiveCustomers = Customer::Inactive()->get();
        $companies = Company::all();
        return view('internals.customers', compact('companies', 'activeCustomers', 'inactiveCustomers'));
    }

    function store()
    {
        //validation
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'is_active' => 'required',
            'company_id' => 'required'
        ]);

        Customer::create($data);
        return back();
    }
}
