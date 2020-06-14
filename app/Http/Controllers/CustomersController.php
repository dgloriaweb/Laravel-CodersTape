<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        // $activeCustomers = Customer::Active()->get();
        // $inactiveCustomers = Customer::Inactive()->get();
        // return view('customers.index', compact('activeCustomers', 'inactiveCustomers'));
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('customers.create', compact('companies'));
    }

    public function store(Customer $customer)
    {

        //validation
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'is_active' => 'required',
            'company_id' => 'required'
        ]);

        Customer::create($data);
        return redirect('customers');
    }

    public function show(Customer $customer)
    {
        // $customer = Customer::where('id', $id)->firstOrFail(); same happens without this

        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer','companies'));
    }


}
