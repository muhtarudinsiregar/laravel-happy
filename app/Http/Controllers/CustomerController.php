<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

        return view('internals.customers', compact(
            'activeCustomers',
            'inactiveCustomers',
            'companies',
        ));
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

        return back();
    }
}
