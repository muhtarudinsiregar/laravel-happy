<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('internals.customers', [
            'customers' => $customers
        ]);
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required'
            ]
        );
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();

        return back();
    }
}
