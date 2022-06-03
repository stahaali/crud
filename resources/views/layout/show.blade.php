@extends('frontend/master')
@section('bodycontent')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Student Name : {{ $contacts->studname }}</h5>
        <p class="card-text">Course : {{ $contacts->course }}</p>
        <p class="card-text">Fee : {{ $contacts->fee }}</p>
    </div>
       
    </hr>

  </div>
</div>