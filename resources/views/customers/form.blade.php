<div class="form-group">
    <label for="name">
        Name
    </label>
    <input
        class="form-control"
        type="text"
        name="name"
        placeholder="name"
        value="{{ old('name') ?? $customer->name }}"
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
        value="{{ old('email') ?? $customer->email }}"
    />
    <div>
        {{ $errors->first('email') }}
    </div>
</div>

<div class="form-group">
    <label for="is_active">Status</label>
    <select name="is_active" id="is_active" class="form-control">
        <option value="" disabled>Select customer status</option>
        <option value="1" {{$customer->active ? 'selected' :''}}>Active</option>
        <option value="0"{{$customer->inactive ? 'selected' :''}}>Inactive</option>
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

@csrf
