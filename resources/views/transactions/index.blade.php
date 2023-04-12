
@extends('layouts.app-master')
@auth


    @section('content')

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 style ="color:#d4a304">Transactions</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('transactions/create') }}" class="btn btn-warning btn-sm" title="New Transaction">
                                <i class="fa fa-plus" aria-hidden="true"></i> Create New Transaction
                            </a>
                            <br/>
                            <br/>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Country</th>
                                            <th>Type</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Customer</th>
                                            <th>Comment</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transaction as $transaction)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaction->country }}</td>
                                            <td>{{ $transaction->type }}</td>
                                            <td>{{ $transaction->currency }}</td>
                                            <td>{{ $transaction->amount }}</td>
                                            <td>{{ $transaction->customer }}</td>
                                            <td>{{ $transaction->comment }}</td>

                                            <td>
                                                <a href="{{ url('transactions/' . $transaction->id) }}" title="View Transaction"><button class="btn btn-dark btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('transactions/edit/' . $transaction->id)}}" title="Edit Transaction"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('transactions' . '/' . $transaction->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Transaction" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endauth
