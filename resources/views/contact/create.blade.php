@extends('layout')
@section('title', "Contact Us")
@section('content')
@if (!session()->has('message'))
<form action="/contact" method="post">
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
    <div class="form-group pb-2">
        <label for="">Message</label>
        <textarea name="message" id="" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
        <div class="text-danger">{{ $errors->first('message') }}</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endif
@endsection
