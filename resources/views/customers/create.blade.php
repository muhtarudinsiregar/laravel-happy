@extends('layouts.app')
@section('title', 'Customer List')

@section("content")
<div class="row">
    <div class="col-12">
        <h3>Customer</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="/customers" method="post" class="pb-5 pt-5 form">
            @csrf
            @include('customers.form')
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
    </div>
</div>
@endsection
