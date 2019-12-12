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
                <input type="text" name="name" placeholder="Fullname" class="form-control" value="{{ old('name') }}">
                <div class="text-danger">{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group pb-2">
                <input type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                <div class="text-danger">{{ $errors->first('email') }}</div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12">
        <ul>
            @foreach ($customers as $customer)
            <li>
                {{ $customer->name }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
