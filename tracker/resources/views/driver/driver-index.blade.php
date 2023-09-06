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
            <td>{{ $vehicle->driver_name }} </td>
            <td>{{ $vehicle->driver_cell }}</td>
            <td>
            <a href="/driver/{{$vehicle->id}}/edit"> Edit </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection