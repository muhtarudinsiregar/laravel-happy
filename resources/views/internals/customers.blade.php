@extends('layout')
@section('title', 'Customer List')

@section("content")
<div class="row">
    <div class="col-12">
        <h3>Customer</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="" method="post" class="pb-5 pt-5 form">
            @csrf
            <div class="form-group pb-2">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Fullname" class="form-control" value="{{ old('name') }}">
                <div class="text-danger">{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group pb-2">
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                <div class="text-danger">{{ $errors->first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <div class="text-danger">{{ $errors->first('active') }}</div>
                <select name="active" class="form-control" id="active">
                    <option value="" disabled>Select Customer status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-6">
        <h3>Active Customers</h3>
        <ul>
            @foreach ($activeCustomers as $customer)
            <li>
                {{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-6">
        <h3>Inactive Customers</h3>
        <ul>
            @foreach ($inactiveCustomers as $customer)
            <li>
                {{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
