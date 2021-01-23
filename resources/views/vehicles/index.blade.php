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
            <th class="text-center" scope="col">Actions</th>
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
                <td class="text-center">
                    <a href="{{ route('vehicles.show', ['vehicle' => $vehicle->id]) }}" class="btn btn-outline-secondary btn-sm">Details</a>
                    <a href="{{ route('vehicles.edit', ['vehicle' => $vehicle->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


