@extends('layout') @section('title', 'Customer List') @section('content')
<div class="row">
    <div class="col-6">
        <h1>Customers</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="customers" method="POST">
            <div class="form-group">
                <label for="name">
                    Name
                </label>
                <input
                    class="form-control"
                    type="text"
                    name="name"
                    placeholder="name"
                    value="{{ old('name') }}"
                />
                <div>
                    {{ $errors->first('name') }}
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                    class="form-control"
                    type="email"
                    name="email"
                    placeholder="email"
                    value="{{ old('email') }}"
                />
                <div>
                    {{ $errors->first('email') }}
                </div>
            </div>

            <div class="form-group">
                <label for="is_active">Status</label>
                <select name="is_active" id="is_active" class="form-control">
                    <option value="" disabled>Select customer status</option>
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" id="company_id" class="form-control">
                    @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Add customer</button>
            @csrf
        </form>
    </div>
</div>
<hr />

<div class="row">
    <div class="col-6">
        <ul>
            @foreach($activeCustomers as $activeCustomer)
            <li>
                {{ $activeCustomer->company->name }}
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-6">
        <ul>
            @foreach($inactiveCustomers as $inactiveCustomer)
            <li>
                {{ $inactiveCustomer->company->name }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
