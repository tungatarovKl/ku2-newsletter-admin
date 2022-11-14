@extends('welcome')

@section('main')
    <div class="container my-5">
        <form action="/formHandler" method="post">
        <div class="form-group">
            <label for="inputPrompt">Enter text</label>
            <input type="text" name="message" class="form-control" id="inputPrompt" placeholder="Enter text">
        </div>
    
        <button type="submit" class="container-fluid btn btn-primary my-1">Submit</button>
        </form> 

    </div>
@stop
