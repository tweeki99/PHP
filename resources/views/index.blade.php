
<table class="table table-bordered">

    <thead>
    <tr>
        <th nowrap style="width: 1%;">#</th>
        <th>Manufacturer</th>
        <th>Model</th>
        <th>Release date</th>
        <th>Price</th>
        <th>Wheels</th>
        <th>Max speed</th>
    </tr>
    </thead>
    <tbody>
    @foreach($caer as $car)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->manufacturer }}</td>
            <td>{{ $user->model }}</td>
            <td>{{ $user->release_date }}</td>
            <td>{{ $user->price }}</td>
            <td>{{ $user->wheels }}</td>
            <td>{{ $user->max_speed }}</td>
        </tr>
    @endforeach
    </tbody>

</table>