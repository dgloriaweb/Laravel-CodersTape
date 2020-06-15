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
        $customer = new Customer();
        $companies = Company::all();
        return view('customers.create', compact('companies', 'customer'));
    }

    public function store(Customer $customer)
    {

        Customer::create($this->validateRequest());
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
        return view('customers.edit', compact('customer', 'companies'));
    }
    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());
        return redirect('customers');
    }

    public function destroy(Customer $customer)
    {
        // UPDATE `customers` SET `deleted_at` = '2020-06-15 07:03:00' WHERE `customers`.`id` = 1;
        //mysql timestamp date format
        // $customer->update(['deleted_at'=>date("Y-m-d H:i:s")]);
        //simple way
        $customer->update(['deleted_at' => now()]);

        //ne hasznald! hasznalj update-et!
        // $customer->delete();
        return redirect('customers');
    }

    private function validateRequest()
    {

        //validation
        return  request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'is_active' => 'required',
            'company_id' => 'required'
        ]);
    }
}
