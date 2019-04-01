@extends('layouts.index')

@section('content')

  @foreach ($contacts as $contact)
  <p>
    <strong>Customer ID: </strong>{{ $contact->id }} <br>
    <strong>First name: </strong>{{ $contact->firstname }} <br>
    <strong>Shipping Address: </strong>{{ $contact->shipping->address }} <br>
    <strong>Billing Address: </strong>{{ $contact->billing->address }}
  </p>
  @endforeach

@endsection
