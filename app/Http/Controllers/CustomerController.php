<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
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
        return view('customers.create', compact('companies'));
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required',
                'active' => 'required',
                'company_id' => 'required',
            ]
        );

        $customer = Customer::create($data);

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
        $data = request()->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required',
            ]
        );
        $customer->update($data);
        return redirect('customers/' . $customer->id);
    }
}
