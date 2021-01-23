<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Fuel type</th>
            <th scope="col">Produced at</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vehicles->items() as$vehicle)
            <tr>
                <td>{{$vehicle->id }}</td>
                <td>{{$vehicle->brand }}</td>
                <td>{{$vehicle->model }}</td>
                <td>{{$vehicle->fuel_type }}</td>
                <td>{{$vehicle->produced_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


