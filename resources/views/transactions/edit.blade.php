

@extends('transactions.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Transaction</div>
  <div class="card-body">
      
      <form action="{{ url('transactions') }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$transaction->id}}" id="id" />
        <label>Country</label></br>
        <input type="text" name="country" id="country" value="{{$transaction->country}}" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" value="{{$transaction->type}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$transaction->status}}" class="form-control"></br>
        <label>Currency</label></br>
        <input type="text" name="currency" id="currency" value="{{$transaction->currency}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="number" id="amount" value="{{$transaction->amount}}" class="form-control"></br>
        <label>Customer</label></br>
        <input type="text" name="customer" id="customer" value="{{$transaction->customer}}" class="form-control"></br>
        <label>Comment</label></br>
        <input type="text" name="comment" id="comment" value="{{$transaction->comment}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-warning"></br>
    </form>
   
  </div>
</div>
 
@stop

