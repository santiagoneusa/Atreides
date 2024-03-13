@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<table class="table">
    
    <thead>
        <tr>
        <th scope="col">Type</th>
        <th scope="col">Total</th>
        <th scope="col">Average Velocity</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row">All</th>
            <td>{{ $viewData['total'] }}</td>
            <td>{{ $viewData['averageVelocity'] }}</td>
        </tr>
        <tr>
            <th scope="row">Sand</th>
            <td>{{ $viewData['totalSand'] }}</td>
            <td>{{ $viewData['averageSandVelocity'] }}</td>
        </tr>
        <tr>
            <th scope="row">Spacial</th>
            <td>{{ $viewData['totalSpacial'] }}</td>
            <td>{{ $viewData['averageSpacialVelocity'] }}</td>
        </tr>
    </tbody>

</table>
@endsection