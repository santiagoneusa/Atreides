@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="container">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Worm</div>
            <div class="card-body">
                <form method="POST" action="{{ route('worm.save') }}">
                    @csrf
                    <input type="text" class="form-control mb-2" placeholder="Enter name" name="name"
                        value="{{ old('name') }}" />
                    <select class="form-control mb-2" name="type">
                        <option value="sand">Sand</option>
                        <option value="Spacial">Spacial</option>
                    </select>
                    <input type="text" class="form-control mb-2" placeholder="Enter velocity" name="velocity"
                        value="{{ old('velocity') }}" />
                    <input type="submit" class="btn btn-primary" value="Send" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection