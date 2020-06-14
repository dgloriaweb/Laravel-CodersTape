@extends('layout') @section('title', 'Add New Customer') @section('content')
<div class="row">
    <div class="col-6">
        <h1>Add New Customers</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="/customers" method="POST">
            @include ('customers.form')
            <button class="btn btn-primary" type="submit">Add customer</button>
        </form>
    </div>
</div>
@endsection
