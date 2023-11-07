@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 ">
                <div class="card shadow-lg">
                    <div class="card-header">Verify Account</div>
                    <div class="card-body">
                        <p>Your Account is not verified! Check your email for verification link <br>
                        If you have not received the mail,  <a href="{{ route('resend.email')}}">click this link.</a></p><hr/>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
