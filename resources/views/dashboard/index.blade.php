<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="mb-4 col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
                <div class="p-3 pt-2 card-header">
                    <div class="text-center icon icon-lg icon-shape bg-gradient-dark shadow-dark border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">store</i>
                    </div>
                    <div class="pt-1 text-end">
                        <p class="mb-0 text-sm text-capitalize">Total Suppliers</p>
                        <h4 class="mb-0">{{ $totalUsers }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
                <div class="p-3 pt-2 card-header">
                    <div class="text-center icon icon-lg icon-shape bg-gradient-primary shadow-primary border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">local_mall</i>
                    </div>
                    <div class="pt-1 text-end">
                        <p class="mb-0 text-sm text-capitalize">Total Supermarkets</p>
                        <h4 class="mb-0">{{ $totalUsers }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
                <div class="p-3 pt-2 card-header">
                    <div class="text-center icon icon-lg icon-shape bg-gradient-success shadow-success border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <div class="pt-1 text-end">
                        <p class="mb-0 text-sm text-capitalize">Total Products</p>
                        <h4 class="mb-0">{{ $totalUsers }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 col-xl-3 col-sm-6 mb-xl-0">
            <div class="card">
                <div class="p-3 pt-2 card-header">
                    <div class="text-center icon icon-lg icon-shape bg-gradient-info shadow-info border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">receipt</i>
                    </div>
                    <div class="pt-1 text-end">
                        <p class="mb-0 text-sm text-capitalize">Total Orders</p>
                        <h4 class="mb-0">{{ $totalUsers }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
