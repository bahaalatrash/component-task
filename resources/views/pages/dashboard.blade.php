{{-- @extends('layouts.app')
@section('content')

<x-statCard  head="user" titlle=" user name : {{ $order->user->name }}" value=" user id : {{ $order->user->id }}"></x-statCard>

<x-statCard head="order" titlle=" description : {{ $order->description }}" value="order id : {{ $order->id }}"></x-statCard>

@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row g-4">
        <!-- User Card -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-primary text-white fw-bold">
                    User
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">user name : {{ $order->user->name }}</li>
                        <li class="list-group-item bg-transparent">user id : {{ $order->user->id }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Order Card -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-success text-white fw-bold">
                    Order
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">description : {{ $order->description }}</li>
                        <li class="list-group-item bg-transparent">order id : {{ $order->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
