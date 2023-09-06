@extends('../layouts.app')

@section('content')
<div>
    <form method="post" action="/driver/{{$data->id}}">
        @csrf
        @method('PUT')

        <label for="driver_name">
            Name Of Driver
            <br>
            <input type="text" name="driver_name" value="{{$data->driver_name}}">
        </label>
     
        <br>
        <label for="driver_cell">
            Driver Cell
            <br>
            <input type="text" name="driver_cell" value="{{$data->driver_cell}}">
        </label>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
@endsection