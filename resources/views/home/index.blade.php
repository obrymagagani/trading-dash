@extends('layouts.app-master')

@section('content')


            @auth
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-center ">
                                    <h2 style ="color:#ffc107">Position Dashboard</h2>
                                </div>
                    <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h4 class="card-text">Number of Transactions</h4>
                                        <h1 class="text-center display-2 tm-text-color-secondary">500<?php ; ?></h1>

                                            <button onclick="window.location.href='{{ url('transactions') }}'" class="btn btn-warning btn-block text-uppercase">View</button>
                                    </div>
                                </div>
                             </div>

                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h4 class="card-text">Number of Users</h4>
                                        <h1 class="text-center display-2 tm-text-color-secondary">250<?php ; ?></h1>

                                        <button onclick="window.location.href=''" class="btn btn-warning btn-block text-uppercase">View</button>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h4 class="card-text">Number of Transactions</h4>
                                    <h1 class="text-center display-2 tm-text-color-secondary">500<?php ; ?></h1>

                                    <button onclick="window.location.href=''" class="btn btn-warning btn-block text-uppercase">View</button>
                                </div>
                            </div>
                        </div>


                    </div>


            @endauth
            </div>
        </div>
    </div>
@endsection
