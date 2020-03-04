@extends('layouts.bootstrap')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger mb-3">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <form action="{{ $action ?? route('car.store') }}" method="POST">
        @csrf

        @if ($method ?? false)
            @method($method)
        @endif

        <div class="form-group">
            <input type="text" class="form-control" placeholder="manufacturer" name="manufacturer" required value="{{ $car->manufacturer ?? '' }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="model" name="model" required value="{{ $car->model ?? '' }}">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="release_date" name="release_date" required value="{{ $car->release_date ?? '' }}">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="price" name="price" required value="{{ $car->price ?? '' }}">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="wheels" name="wheels" required value="{{ $car->wheels ?? '' }}">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="max_speed" name="max_speed" required value="{{ $car->max_speed ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
