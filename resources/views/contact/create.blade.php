@extends('layout') @section('title', 'Contact Us') @section('content')

<h1>Contact Us!</h1>
<form action="">
    <div class="form-group">
        <label for="name"> Name </label>
        <input
            class="form-control"
            type="text"
            name="name"
            placeholder="name"
            value="{{ old('name') }}"
        />
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="form-group">
        <label for="email"> Email </label>
        <input
            class="form-control"
            type="text"
            name="email"
            placeholder="name"
            value="{{ old('email') }}"
        />
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group">
        <label for="message"> Message </label>
        <textarea
            class="form-control"
            message="message"
            placeholder="message"
            value="{{ old('message')  }}"
        />
        <div>{{ $errors->first('message') }}</div>
    </div>
</form>
@endsection
