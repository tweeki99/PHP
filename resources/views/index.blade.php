<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
@foreach($cars as $car)
    @component('components.car',[
        'manufacturer' => $car->manufacturer,
        'model' => $car->model,
        'release_date' => $car->release_date,
        'price' => $car->price,
        'wheels' => $car->wheels,
        'max_speed' => $car->max_speed
    ])

    @endcomponent
@endforeach
</body>
</html>
