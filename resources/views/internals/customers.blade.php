@extends('layout') @section('content')
<h1>Customers</h1>

<form action="customers" method="POST">
    <div class="input-group">
        <input type="text" name="name" placeholder="name" />
        <div>
            {{ $errors->first('name') }}
        </div>
    </div>
    <div class="input-group">
        <input type="email" name="email" placeholder="email" />
        <div>
            {{ $errors->first('email') }}
        </div>
    </div>

    <button type="submit">Add customer</button>
    @csrf
</form>

<ul>
    @foreach($customers as $customer)
    <li>
        {{ $customer->name }}
    </li>
    @endforeach
</ul>
@endsection
