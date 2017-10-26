@extends('galleries/layouts/master')

@section('content')
    <br>
    <h2>Login</h2>
    <form>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>

        <button type="submit" class="btn btn-success">Login</button>
    </form>
    <hr>
@endsection