@extends('layout') @section('title', 'Show Customer') @section('content')
<div class="row">
    <div class="col-6">
        <h1>Show Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
       {{$customer->name}}

    </div>
</div>
@endsection
