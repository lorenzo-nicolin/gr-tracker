@extends('../layouts.app')

@section('content')
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
        Origin :
            <br>
            <input type="text" name="origin">
        </label>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
@endsection