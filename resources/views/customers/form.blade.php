<div class="form-group pb-2">
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Fullname" class="form-control"
        value="{{ old('name')?? $customer->name }}">
    <div class="text-danger">{{ $errors->first('name') }}</div>
</div>
<div class="form-group pb-2">
    <label for="">Email</label>
    <input type="text" name="email" placeholder="Email" class="form-control"
        value="{{ old('email')?? $customer->email }}">
    <div class="text-danger">{{ $errors->first('email') }}</div>
</div>
<div class="form-group">
    <label for="company_id">Companies</label>
    <div class="text-danger">{{ $errors->first('company_id') }}</div>
    <select name="company_id" class="form-control" id="company_id">
        @foreach ($companies as $company)
        <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>
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
