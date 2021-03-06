<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact(
            'customers',
        ));
    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('companies', 'customer'));
    }

    public function store(Request $request)
    {
        $customer = Customer::create($this->validateRequests());

        return redirect('customers');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($this->validateRequests());
        return redirect('customers/' . $customer->id);
    }

    private function validateRequests()
    {
        return request()->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required',
                'active' => 'required',
                'company_id' => 'required',
            ]
        );
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customers');
    }
}
