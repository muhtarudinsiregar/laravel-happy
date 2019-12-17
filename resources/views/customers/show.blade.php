@extends('layouts.app')
@section('title', 'Details for'.$customer->name)

@section("content")
<div class="row">
    <div class="col-12">
        <h3>Details for {{ $customer->name }}</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="/customers/{{ $customer->id }}/edit">Edit</a>
        <form action="/customers/{{ $customer->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
    <div class="col-12">
        <p><strong>Name</strong> {{ $customer->name }}</p>
        <p><strong>Email</strong> {{ $customer->email }}</p>
        <p><strong>Company Name</strong> {{ $customer->company->name }}</p>
    </div>
</div>
@endsection
