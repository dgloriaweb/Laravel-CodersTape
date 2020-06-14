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
                <label for="isActive">Status</label>
                <select name="isActive" id="isActive" class="form-control">
                    <option value="" disabled>Select customer status</option>
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
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
                {{ $activeCustomer->name }}
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-6">
        <ul>
            @foreach($inactiveCustomers as $inactiveCustomer)
            <li>
                {{ $inactiveCustomer->name }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
