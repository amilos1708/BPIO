<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date registration</th>
            <th scope="col">Note</th>
            <th class="text-center" scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vehicle_registrations->items() as$vehicle_registration)
            <tr>
                <td>{{$vehicle_registration->id }}</td>
                <td>{{$vehicle_registration->date_registration }}</td>
                <td>{{$vehicle_registration->note }}</td>
                <td class="text-center">
                    <a href="{{ route('vehicle_registrations.show', ['vehicle_registration' => $vehicle_registration->id]) }}" class="btn btn-outline-secondary btn-sm">Details</a>
                    <a href="{{ route('vehicle_registrations.edit', ['vehicle_registration' => $vehicle_registration->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


