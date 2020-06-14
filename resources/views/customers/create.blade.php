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
        </form>
    </div>
</div>
@endsection
