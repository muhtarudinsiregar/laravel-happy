<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $activeCustomers = Customer::where('active', 1)->get();
        $inactiveCustomers = Customer::where('active', 0)->get();

        return view('internals.customers', compact(
            'activeCustomers',
            'inactiveCustomers'
        ));
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required',
                // 'active ' => 'required',
            ]
        );
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();

        return back();
    }
}
