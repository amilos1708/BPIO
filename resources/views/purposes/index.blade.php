<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Purpose</th>
            <th class="text-center" scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($purposes->items() as $purpose)
            <tr>
                <td>{{ $purpose->id }}</td>
                <td>{{ $purpose->name }}</td>
                <td class="text-center">
                    <a href="{{ route('purposes.show', ['purpose' => $purpose->id]) }}" class="btn btn-outline-secondary btn-sm">Details</a>
                    <a href="{{ route('purposes.edit', ['purpose' => $purpose->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


