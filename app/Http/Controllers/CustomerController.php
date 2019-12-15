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
}
