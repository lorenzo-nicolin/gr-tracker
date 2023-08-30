@extends('../layouts.app')

@section('content')
<div>
    <form method="post" action="/vehicle/{{$data->id}}">
        @csrf
        @method('PUT')

        <label for="name_of_vehile">
            Name Of Vehicle
            <br>
            <input type="text" name="name_of_vehile" value="{{$data->name_of_vehile}}">
        </label>
     
        <br>
        <label for="vehicle_reg">
            Vehicle Reg
            <br>
            <input type="text" name="vehicle_reg" value="{{$data->vehicle_reg}}">
        </label>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
@endsection