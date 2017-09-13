@extends('layouts.layout')

@section('content')
    <h2>Send a post:</h2>

    <form action="/post" method="get">

        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Json:</label>
            <input class="form-control" type="text" required name="json" id="json">
        </div>


        <div class="form-group">
            <button class="btn btn-primary" type="submit">Send</button>
        </div>

        @include('layouts.error')

    </form>


@endsection