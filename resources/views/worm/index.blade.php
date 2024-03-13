@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

<table class="table">
    
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Velocity</th>
        </tr>
    </thead>

    @foreach ($viewData['worms'] as $worm)
    <tbody>
        <tr>
            <th scope="row">{{ $worm->getId() }}</th>
            @if ($worm->getType() == 'Sand')
                <td style="color: blue;">{{ $worm->getName() }}</td>
            @else
                <td>{{ $worm->getType() }}</td>
            @endif
            
            <td>{{ $worm->getType() }}</td>
            
            @if ($worm->getType() == 'Spacial')
                <td style="font-weight: bold;">{{ $worm->getVelocity() }}</td>
            @else
                <td>{{ $worm->getVelocity() }}</td>
            @endif
        </tr>
    </tbody>
    @endforeach

</table>
@endsection