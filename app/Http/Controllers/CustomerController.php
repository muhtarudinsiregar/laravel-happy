<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = ['John Doe', 'Bob The Builder'];
        return view('internals.customers', [
            'customers' => $customers
        ]);
    }
}
