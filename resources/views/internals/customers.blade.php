@extends('layout')

@section('content')
<h1>Customers</h1>


<form action="customers" method="POST">
    <div class="input-group">
        <input type="text" name="name">
    </div>

    <button type="submit">Add customer</button>
    @csrf
</form>

{{ $errors->first('name') }}
<ul>
    @foreach($customers as $customer)
    <li>
        {{ $customer->name }}
    </li>
    @endforeach
</ul>
@endsection
