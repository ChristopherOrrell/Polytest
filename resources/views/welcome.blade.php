@extends('layouts.index')

@section('content')



<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">Customer</th>
      <th scope="col">Shipping</th>
      <th scope="col">Billing</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $contact)
    <tr>
      <td >{{ $contact->id }}</td>
      <td >{{ $contact->firstname }}</td>
      <td >{{ $contact->lastname }}</td>
      <td >{{ $contact->customer->address }}</td>
      <td >{{ $contact->shipping->address }}</td>
      <td >{{ $contact->billing->address }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

  @foreach ($contacts as $contact)

  @endforeach

@endsection
