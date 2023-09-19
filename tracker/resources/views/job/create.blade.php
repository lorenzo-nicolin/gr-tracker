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
        Select Driver :
            <br>
            <!-- <input type="text" name="driv"> -->

            <select name="" class="form-select" id="">

            </select>
        </label>

        <br>
        <label for="origin">
        Select Driver :
            <br>
            <!-- <input type="text" name="driv"> -->

            <select name="" class="form-select" id="">
                
            </select>
        </label>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
@endsection