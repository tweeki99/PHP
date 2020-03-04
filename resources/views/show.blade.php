@extends('layouts.bootstrap')

@section('content')

    <div class="mb-3 container">

        <form action="{{ route('car.destroy', $car) }}" method="post">
            @csrf
            @method('DELETE')

            <a href="{{ route('car.edit', [$car]) }}" class="btn btn-info">Изменить</a>

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

    @component('components.car',[
            'manufacturer' => $car->manufacturer,
        'model' => $car->model,
        'release_date' => $car->release_date,
        'price' => $car->price,
        'wheels' => $car->wheels,
        'max_speed' => $car->max_speed
    ])

    @endcomponent

@endsection
