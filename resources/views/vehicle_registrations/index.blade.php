<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date registration</th>
            <th scope="col">Note</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($vehicle_registrations->items() as$vehicle_registration)
            <tr>
                <td>{{$vehicle_registration->id }}</td>
                <td>{{$vehicle_registration->date_registration }}</td>
                <td>{{$vehicle_registration->note }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


