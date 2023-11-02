@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Looking for a job?</h1>
            <h3>Please create an account</h3>
            <img src="{{ asset(''image/clickhere.png'')}}" alt="signup">
        </div>

        <div class="col-md-6">
           <div class="card">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </div>
           </div>
        </div>
    </div>
</div>

 @endsection 