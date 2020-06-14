@extends('layout') @section('title', 'Customer List') @section('content')

<div class="row">
    <div class="col-6">
        <h1>Customers</h1>
        <p>
            <a href="customers/create">Add new customer</a>
        </p>
    </div>
</div>

@foreach($customers as $customer)
<div class="row">
    <div class="col-2">{{ $customer->id}}</div>
    <div class="col-4">
        <a href="customers/{{ $customer->id }}">{{ $customer->name }}</a>
    </div>
    <div class="col-4">{{ $customer->company->name}}</div>
    <div class="col-2">{{ $customer->is_active}}</div>
</div>

@endforeach @endsection
