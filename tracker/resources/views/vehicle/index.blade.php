@extends('../layouts.app')
@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif



@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Reg Number</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehicles as $vehicle)

        <tr>
            <td>{{ $vehicle->name_of_vehile }} </td>
            <td>{{ $vehicle->vehicle_reg }}</td>
            <td>
            <a href="/vehicle/{{$vehicle->id}}/edit"> Edit </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection