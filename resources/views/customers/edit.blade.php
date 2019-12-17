@extends('layouts.app')
@section('title', 'Customer Edit')

@section("content")
<div class="row">
    <div class="col-12">
        <h3>Edit Detail For {{ $customer->name }}</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="/customers/{{ $customer->id }}" method="POST" class="pb-5 pt-5 form">
            @method('PATCH')
            @csrf
            @include('customers.form')
            <button type="submit" class="btn btn-primary btn-lg btn-block">Save Customer</button>
        </form>
    </div>
</div>
@endsection
