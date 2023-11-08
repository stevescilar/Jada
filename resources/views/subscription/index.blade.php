@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">PPiD - $10</h5>
                        <p class="card-text">PPiD -Pay per download is a type of subscription you pay per each new invoice
                            download</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('pay.ppid') }}" class="card-link">
                            <button class="btn btn-primary">Subscribe Now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Weekly - $40</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('pay.weekly') }}" class="card-link">
                            <button class="btn btn-primary">Subscribe Now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Monthly - $90</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('pay.monthly') }}" class="card-link">
                            <button class="btn btn-primary">Subscribe Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
