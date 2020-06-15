<form action="/customers/{{$customer->id }} " method="POST">
    @method('DELETE') @csrf
    <button class="btn btn-danger" type="submit">
        Delete customer
    </button>
</form>
