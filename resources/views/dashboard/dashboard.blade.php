@extends('layouts.dashboardlayout')
@section('title', 'dashboard')

@section('content')
    <div class="row my-2">
        <div class="col-sm-3">
            <div class="card bg-info m-1 p-3 text-center text-light">
                users
                <hr>
                {{$users_count}}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-primary m-1 p-3 text-center text-light">
                products
                <hr>
                {{$products_count}}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-light m-1 p-3 text-center text-dark">
                delivery orders
                <hr>
                {{$orders_info[0]->orders_count}}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-secondary m-1 p-3 text-center text-light">
                inplace orders
                <hr>
                {{$orders_info[1]->orders_count}}
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-sm-6">
            <div class="card bg-warning m-1 p-3 text-center text-light">
                total earning
                <hr>
                {{$earning['total']}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-warning m-1 p-3 text-center text-light">
                annual earning
                <hr>
                {{$earning['annual']}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-warning m-1 p-3 text-center text-light">
                monthly earning
                <hr>
                {{$earning['monthly']}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-warning m-1 p-3 text-center text-light">
                daily earning
                <hr>
                {{$earning['daily']}}
            </div>
        </div>
    </div>
@endsection
