@extends('../layouts.app')

@section('content')

<?php

// print_r($vehicles);

?>
<div>
    <form method="POST" action="/vehicle">
        @csrf
        <label for="destination">
            Destination :
            <br>
            <input type="text" name="destination">
        </label>

        <br>
        <label for="origin">
            Origin :
            <br>
            <input type="text" name="origin">
        </label>

        <br>
        <label for="origin">
            Select Driver :
            <br>
            <!-- <input type="text" name="driv"> -->

            <select name="driver" class="form-select" id="driver">

                @foreach ($driver as $driver)

                <option value="{{$driver->id}}">{{$driver->driver_name}}</option>

                @endforeach

            </select>


        </label>

        <br>
        <label for="origin">
            Select Trucks :
            <br>
            <!-- <input type="text" name="driv"> -->

            <select name="vehicle" class="form-select" id="vehicle">

                @foreach ($vehicles as $vehicle)

                <option value="{{$vehicle->id}}">{{$vehicle->name_of_vehile}}</option>

                @endforeach

        </label>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
@endsection