<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Date birth</th>
            <th scope="col">Date employment</th>
            <th scope="col">Drivers license</th>
            <th scope="col">Phone number</th>
            <th class="text-center" scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users->items() as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->date_birth }}</td>
                <td>{{ $user->date_employment }}</td>
                <td>{{ $user->drivers_license_id }}</td>
                <td>{{ $user->phone_number }}</td>
                <td class="text-center">
                    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-outline-secondary btn-sm">Details</a>
                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


