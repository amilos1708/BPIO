<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Purpose</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($purposes->items() as $purpose)
            <tr>
                <td>{{ $purpose->id }}</td>
                <td>{{ $purpose->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


