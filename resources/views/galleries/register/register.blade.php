@extends('galleries/layouts/master')

@section('content')

    <br>
    <h2>Register</h2>
    <form>
        <div class="form-group col-lg-6">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>

        <div class="form-group col-lg-6">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>

        <div class="form-group col-lg-6">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>

        <div class="form-group col-lg-6">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group col-lg-6">
            <label for="pasword_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" id="pasword_confirmation" name="pasword_confirmation">
        </div>

        <div class="">
            <textarea name="" id="" cols="55" rows="5"></textarea>
        </div>
        
        <div class="checkbox">
            <label><input type="checkbox"> Accept terms and conditions</label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Sign up</button>
        </div>
    </form>
    <hr>

@endsection