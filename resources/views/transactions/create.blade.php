@extends('layouts.app-master')
@section('content')
 
<div class="card mt-3">
  <h3>
  <div class="card-header">Enter Transaction Details</div>
  </h3>
  <div class="card-body">
      
      <form action="{{ url('transactions') }}" method="post">
        {!! csrf_field() !!}
       
        
        <input type="hidden" name="id" id="id"/>
        <div class="row">
          <div class="col">
        <label>Country</label></br>
        <input type="text" name="country" id="country" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status"class="form-control"></br>
        <label>Currency</label></br>
        <input type="text" name="currency" id="currency" class="form-control"></br>
        <label>Amount</label></br>
        <input type="number" name="amount" id="amount" class="form-control"></br>
        <label>Customer</label></br>
        <input type="text" name="customer" id="customer" class="form-control"></br>
        <label>Comment</label></br>
        <input type="text" name="comment" id="comment"  class="form-control"></br><br>
     
        
        <a href="{{ url('/transactions') }}" class="btn btn-dark" title="Go back">
          <i class="fa fa-plus" aria-hidden="true"></i> Go Back</a>
          <input type="submit" value="Save Transaction" class="btn btn-warning">
      <br/>


    </form>
   
  </div>
</div>
 
@stop