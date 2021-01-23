<!-- resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Sex</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($sexes->items() as $sex)
            <tr>
                <td>{{ $sex->id }}</td>
                <td>{{ $sex->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


