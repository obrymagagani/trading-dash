@extends('transactions.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Transaction</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">ID     : {{ $transactions->id}}</h5>
        <p class="card-text">Country      : {{ $transactions->country}}</p>
        <p class="card-text">Type    : {{  $transactions->type}}</p>
        <p class="card-text">Amount     : {{  $transactions->amount}}</p>
  </div>
       
    </hr>
  
  </div>
</div>