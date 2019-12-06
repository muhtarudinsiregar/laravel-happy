@extends('layout')
@section("content")
<ul>
    @foreach ($customers as $customer)
    {{ $customer }}
    @endforeach
</ul>
@endsection
