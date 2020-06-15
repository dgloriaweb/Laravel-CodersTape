@extends('layout') @section('title', 'Show Customer') @section('content')
<div class="row">
    <div class="col-6">
        <h1>Show Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-4">
        Name:
        {{$customer->name}}
        <br />
        Company: {{$customer->company->name}}
        <br />
        Email: {{$customer->email}}
        <br />
        Deleted: {{$customer->deleted_at}}
        <br />
    </div>
</div>
<div class="row">
    <div class="col-4" style="display: inline;">
        <a href="\customers\{{$customer->id}}\edit" class="btn btn-warning"
            >Edit customer</a
        >
        @include('customers.inc.delete')
    </div>
</div>
@endsection
