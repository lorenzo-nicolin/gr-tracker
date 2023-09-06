@extends('../layouts.app')

@section('content')
<div>
    <form method="POST" action="/driver">
        @csrf
        <label for="driver_name">
            Driver Name
            <br>
            <input type="text" name="driver_name">
        </label>
     
        <br>
        <label for="driver_cell">
            Driver Cell
            <br>
            <input type="text" name="driver_cell">
        </label>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
@endsection