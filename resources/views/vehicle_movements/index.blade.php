<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date start moving</th>
            <th scope="col">Date stop moving</th>
            <th scope="col">Beginning km</th>
            <th scope="col">Fuel status</th>
            <th scope="col">Note</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vehicle_movements->items() as$vehicle_movement)
            <tr>
                <td>{{$vehicle_movement->id }}</td>
                <td>{{$vehicle_movement->date_start_moving }}</td>
                <td>{{$vehicle_movement->date_stop_moving }}</td>
                <td>{{$vehicle_movement->beginning_km }}</td>
                <td>{{$vehicle_movement->fuel_status }}</td>
                <td>{{$vehicle_movement->note }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


